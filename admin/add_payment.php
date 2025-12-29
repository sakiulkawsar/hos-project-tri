<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/checklogin.php');
check_login();

if (isset($_POST['submit'])) {

    $name   = trim($_POST['name']);
    $tmeal   = (int) $_POST['tmeal'];
    $due    = (float) $_POST['due'];
    $amount = (float) $_POST['amount'];

    // 🔥 AUTO CALCULATION
    $tamount =($tmeal * $amount) + $due;

    $query = "INSERT INTO pament (name, tmeal, due, amount, tamount)
              VALUES (?, ?, ?, ?, ?)";

    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("siddd", $name, $tmeal, $due, $amount, $tamount);

    if ($stmt->execute()) {
        $_SESSION['msg'] = "Payment added successfully";
    } else {
        $_SESSION['msg'] = "Insert failed: " . $stmt->error;
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

                <h2 class="page-title">Add PAYMENT</h2>

                <?php if (!empty($_SESSION['msg'])) { ?>
                <div class="alert alert-info">
                    <?php echo htmlentities($_SESSION['msg']); ?>
                </div>
                <?php $_SESSION['msg'] = ""; ?>
                <?php } ?>

                <div class="panel panel-default">
                    <div class="panel-heading">Add payment</div>
                    <div class="panel-body">

              <form method="post" class="form-horizontal">

    <div class="form-group">
        <label class="col-sm-2 control-label">Name:</label>
        <div class="col-sm-8">
            <input type="text" name="name" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Meal:</label>
        <div class="col-sm-8">
            <input type="text" name="tmeal" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Due amount:</label>
        <div class="col-sm-8">
            <input type="text" name="due" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Meal rete:</label>
        <div class="col-sm-8">
            <input type="text" name="amount" class="form-control" required>
        </div>
    </div>

    

    <div class="form-group">
        <div class="col-sm-8 col-sm-offset-2">
            <input type="submit" name="submit" value="Add Meal" class="btn btn-primary">
        </div>
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