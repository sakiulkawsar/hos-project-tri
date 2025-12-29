<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('includes/config.php');

$sql = "SELECT * FROM vw_student_meal_summary";
$result = $mysqli->query($sql);
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
    <title>Manage Rooms</title>
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
    <?php include('includes/header.php');?>

    <div class="ts-main-content">
        <?php include('includes/sidebar.php');?>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title" style="margin-top: 4%">View Meal</h2>
                        <div class="panel panel-default">
                            <div class="panel-heading">All meal Details</div>
                            <div class="panel-body">
                                <table id="zctb" class="display table table-striped table-bordered table-hover"
                                    cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Student id</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Room no</th>
                                            <th>Breackfast</th>
                                            <th>Lunch</th>
                                            <th>Dinner</th>
                                            <th>Total meal</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>Student id</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Room no</th>
                                            <th>Breackfast</th>
                                            <th>Lunch</th>
                                            <th>Dinner</th>
                                            <th>Total meal</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
                                        <tr>
                                            <td><?php echo $row['student_id']; ?></td>
                                            <td><?php echo $row['firstName']; ?></td>
                                            <td><?php echo $row['lastName']; ?></td>
                                            <td><?php echo $row['roomno']; ?></td>
                                            <td><?php echo $row['brackfast']; ?></td>
                                            <td><?php echo $row['lunch']; ?></td>
                                            <td><?php echo $row['dinner']; ?></td>
                                            <td><?php echo $row['total_meal']; ?></td>
                                        </tr>
                                        <?php
        }
    } else {
        echo "<tr><td colspan='8'>No data found</td></tr>";
    }
    ?>


                                    </tbody>
                                </table>


                            </div>
                        </div>


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