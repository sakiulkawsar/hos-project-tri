<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/checklogin.php');
check_login();

if (isset($_POST['submit'])) {

    $brackfast = (int) $_POST['brackfast'];
    $lunch = (int) $_POST['lunch'];
    $dinner = (int) $_POST['dinner'];
    $registration_id = (int) $_POST['registration_id'];

    // Daily total
    $tmeal = $brackfast + $lunch + $dinner;

    // 🔹 Get previous cumulative meal for this registration_id
    $prev = $mysqli->prepare("
        SELECT IFNULL(tomeal,0) 
        FROM mill 
        WHERE registration_id = ?
        ORDER BY id DESC 
        LIMIT 1
    ");
    $prev->bind_param("i", $registration_id);
    $prev->execute();
    $prev->bind_result($prev_tomeal);
    $prev->fetch();
    $prev->close();

    // Cumulative total
    $tomeal = $tmeal + (int)$prev_tomeal;

    // Insert new row
    $query = "
        INSERT INTO mill 
        (brackfast, lunch, dinner, tmeal, tomeal, registration_id)
        VALUES (?, ?, ?, ?, ?, ?)
    ";

    $stmt = $mysqli->prepare($query);
    $stmt->bind_param(
        "iiiiii",
        $brackfast,
        $lunch,
        $dinner,
        $tmeal,
        $tomeal,
        $registration_id
    );

    if ($stmt->execute()) {
        $_SESSION['msg'] = "Meal added successfully";
    } else {
        $_SESSION['msg'] = "Error: " . $stmt->error;
    }
}



?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Mill</title>

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include('includes/header.php'); ?>

    <div class="ts-main-content">
        <?php include('includes/sidebar.php'); ?>

        <div class="content-wrapper">
            <div class="container-fluid">

                <h2 class="page-title">Add meal</h2>

                <?php if (!empty($_SESSION['msg'])) { ?>
                    <div class="alert alert-info">
                        <?php echo htmlentities($_SESSION['msg']); ?>
                    </div>
                    <?php $_SESSION['msg'] = ""; ?>
                <?php } ?>

                <div class="panel panel-default">
                    <div class="panel-heading">Add Mill</div>
                    <div class="panel-body">

                        <form method="post" class="form-horizontal">

                        

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Breakfast</label>
                                <div class="col-sm-8">
                                    <input type="number" name="brackfast" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Lunch</label>
                                <div class="col-sm-8">
                                    <input type="number" name="lunch" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Dinner</label>
                                <div class="col-sm-8">
                                    <input type="number" name="dinner" class="form-control" required>
                                </div>
                            </div>

                              <div class="form-group">
                                <label class="col-sm-2 control-label">registration_id</label>
                                <div class="col-sm-8">
                                    <input type="number" name="registration_id" class="form-control" required>
                                </div>
                            </div>

                          


                            <div class="col-sm-8 col-sm-offset-2">
                                <input type="submit" name="submit" value="Add Meal" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Loading Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>
</body>

</html>