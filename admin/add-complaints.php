<?php session_start();
error_reporting(0);
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if (isset($_POST['submit'])) {

    $complainnum   = $_POST['complainnum'];
    $complaintype = $_POST['complaintype'];
    $complaindet  = $_POST['complaindet'];
    $userId       = $_SESSION['id'];

    // check duplicate
    $sql = "SELECT ComplainNumber FROM complaints WHERE ComplainNumber=?";
    $stmt1 = $mysqli->prepare($sql);
    $stmt1->bind_param('i', $complainnum);
    $stmt1->execute();
    $stmt1->store_result();

    if ($stmt1->num_rows > 0) {
        echo "<script>alert('Complain already exists');</script>";
    } else {

        $query = "INSERT INTO complaints
        (ComplainNumber, userId, complaintType, complaintDetails)
        VALUES (?,?,?,?)";

        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('iiss', $complainnum, $userId, $complaintype, $complaindet);
        $stmt->execute();

        echo "<script>alert('Complaint added successfully');</script>";
    }
}

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">
    <title>Create Room</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript" src="js/validation.min.js"></script>
</head>

<body>
    <?php include('includes/header.php'); ?>
    <div class="ts-main-content">
        <?php include('includes/sidebar.php'); ?>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Add Complain</h2>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Add Complain</div>
                                    <div class="panel-body">
                                        <?php if (isset($_POST['submit'])) { ?>
                                            <p style="color: red"><?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg'] = ""); ?></p>
                                        <?php } ?>
                                        <form method="post" class="form-horizontal">

                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Room Number </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="complainnum" id="complainnum" value="" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Complain Type.</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="complaintype" id="complaintype" value="" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Complain Details</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="complaindet" id="complaindet" value="" required="required">
                                                </div>
                                            </div>

                                            <div class="col-sm-8 col-sm-offset-2">
                                                <input class="btn btn-primary" type="submit" name="submit" value="Create complain ">
                                            </div>
                                    </div>

                                    </form>

                                </div>
                            </div>


                        </div>




                    </div>
                </div>

            </div>
        </div>


    </div>
    </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>
    </script>
</body>

</html>