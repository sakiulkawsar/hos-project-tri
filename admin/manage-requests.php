<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

// Fetch all requests
$ret = "SELECT * FROM users_request";
$stmt = $mysqli->prepare($ret);
$stmt->execute();
$res = $stmt->get_result();
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
						<h2 class="page-title" style="margin-top: 4%">Manage User request</h2>
						<div class="panel panel-default">
							<div class="panel-heading">All User request Details</div>
							<div class="panel-body">
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Comment</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $cnt = 1;
    while($row = $res->fetch_object()) {
    ?>
        <tr>
            <td><?php echo $cnt; ?></td>
            <td><?php echo htmlspecialchars($row->name); ?></td>
            <td><?php echo htmlspecialchars($row->email); ?></td>
            <td><?php echo htmlspecialchars($row->mobile); ?></td>
            <td><?php echo htmlspecialchars($row->comment); ?></td>
            <td>
                <?php if($row->status == 'pending') { ?>
                    <span class="label label-warning">Pending</span>
                <?php } elseif($row->status == 'accepted') { ?>
                    <span class="label label-success">Accepted</span>
                <?php } else { ?>
                    <span class="label label-danger">Rejected</span>
                <?php } ?>
            </td>
            <td>
                <?php if($row->status == 'pending'){ ?>
                    <a href="request-action.php?action=accept&id=<?php echo $row->id; ?>" onclick="return confirm('Accept this request?');">✔</a>
                    <a href="request-action.php?action=reject&id=<?php echo $row->id; ?>" onclick="return confirm('Reject this request?');">✖</a>
                <?php } else { ?>
                    <a href="request-action.php?action=delete&id=<?php echo $row->id; ?>" onclick="return confirm('Delete this request?');">🗑</a>
                <?php } ?>
            </td>
        </tr>
    <?php
        $cnt++;
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
