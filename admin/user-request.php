<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

// Accept Request
if(isset($_GET['accept'])) {
    $id = intval($_GET['accept']);
    $sql = "UPDATE users_request SET status='accepted' WHERE id=?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    echo "<script>alert('Request Accepted');</script>";
}

// Reject Request
if(isset($_GET['reject'])) {
    $id = intval($_GET['reject']);
    $sql = "UPDATE users_request SET status='rejected' WHERE id=?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    echo "<script>alert('Request Rejected');</script>";
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
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sno.</th>
										
											
											<th>Name</th>
											<th>Email</th>
											<th>Mobile </th>
											<th>Comment</th>
											<th>Status</th>
                                               <th>Action</th>

										</tr>
									</thead>
									<tfoot>
										<tr>
												<th>Sno.</th>
										
										
											
											
											<th>Name</th>
											<th>Email</th>
											<th>Mobile </th>
											<th>Comment</th>
                                            	<th>Status</th>
											<th>Action</th>
											
										</tr>
									</tfoot>
									<tbody>
<?php	
$aid=$_SESSION['id'];
$ret="select * from users_request";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row = $res->fetch_object()) {
?>
<tr>
    <td><?php echo $cnt; ?></td>
    
    <td><?php echo $row->name; ?></td>
    <td><?php echo $row->email; ?></td>
    <td><?php echo $row->mobile; ?></td>
    <td><?php echo $row->comment; ?></td>

    <td>
    <?php if($row->status == 'pending'){ ?>
        <span class="label label-warning">Pending</span>
    <?php } elseif($row->status == 'accepted'){ ?>
        <span class="label label-success">Accepted</span>
    <?php } else { ?>
        <span class="label label-danger">Rejected</span>
    <?php } ?>
</td>

<td>
<?php if($row->status == 'pending'){ ?>

    <a href="request-action.php?action=accept&id=<?php echo $row->id; ?>"
       onclick="return confirm('Accept this request?');">
        <i class="fa fa-check text-success"></i>
    </a>

    &nbsp;&nbsp;

    <a href="request-action.php?action=reject&id=<?php echo $row->id; ?>"
       onclick="return confirm('Reject this request?');">
        <i class="fa fa-times text-danger"></i>
    </a>

<?php } else { ?>
    <em>No Action</em>
<?php } ?>
</td>

</tr>
<?php
$cnt++;
} ?>
											
										
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
