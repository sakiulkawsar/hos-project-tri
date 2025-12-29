<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/checklogin.php');
check_login();

/* ================= DELETE ================= */
if (isset($_GET['del'])) {
	$id = intval($_GET['del']);

	$sql = "DELETE FROM mill WHERE id = ?";
	$stmt = $mysqli->prepare($sql);
	$stmt->bind_param("i", $id);

	if ($stmt->execute()) {
		$_SESSION['msg'] = "Record deleted successfully";
	} else {
		$_SESSION['msg'] = "Delete failed";
	}

	header("Location: manage-mill.php");
	exit;
}
?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<title>Manage Meal</title>

	<!-- ✅ CSS (UNCHANGED) -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
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

				<h2 class="page-title">Manage Meal</h2>

				<?php if (!empty($_SESSION['msg'])) { ?>
					<div class="alert alert-info">
						<?php echo htmlentities($_SESSION['msg']); ?>
					</div>
					<?php $_SESSION['msg'] = ""; ?>
				<?php } ?>

				<div class="panel panel-default">
					<div class="panel-heading">Meal List</div>
					<div class="panel-body">

						<table id="zctb" class="display table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Student Name</th>
									<th>Breakfast</th>
									<th>lunch</th>
									<th>Dinner</th>
									<th>Today meal</th>
									<th>Total meal</th>
									<th>Gender</th>
									<th>Action</th>
								</tr>
							</thead>

							<tbody>
								<?php
								$ret = "SELECT id, name, brackfast, lunch, dinner, tmeal,tomeal, gender FROM mill";
								$stmt = $mysqli->prepare($ret);
								$stmt->execute();
								$res = $stmt->get_result();

								$cnt = 1;

								if ($res->num_rows > 0) {
									while ($row = $res->fetch_object()) {
								?>
										<tr>
											<td><?php echo $cnt; ?></td>
											<td><?php echo htmlentities($row->name); ?></td>
											<td><?php echo htmlentities($row->brackfast); ?></td>
											<td><?php echo htmlentities($row->lunch); ?></td>
											<td><?php echo htmlentities($row->dinner); ?></td>
											<td><?php echo htmlentities($row->tmeal); ?></td>
											<td><?php echo htmlentities($row->tomeal); ?></td>
											<td><?php echo htmlentities($row->gender); ?></td>
											<td>
												<a href="edit-mill.php?id=<?php echo $row->id; ?>">
													<i class="fa fa-edit"></i>
												</a>
												&nbsp;&nbsp;
												<a href="manage-mill.php?del=<?php echo $row->id; ?>"
													onclick="return confirm('Do you want to delete this record?');">
													<i class="fa fa-close"></i>
												</a>
											</td>
										</tr>
									<?php
										$cnt++;
									}
								} else {
									?>
									<tr>
										<td colspan="7" style="text-align:center; color:red;">
											No data found
										</td>
									</tr>
								<?php } ?>
							</tbody>

						</table>

					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- ✅ JS (UNCHANGED) -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

	<script>
		$(document).ready(function() {
			$('#zctb').DataTable();
		});
	</script>

</body>

</html>