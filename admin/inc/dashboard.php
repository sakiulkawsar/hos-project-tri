<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

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
	
	<title>DashBoard</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">

	<style>

		/* ================= Modern Dashboard Enhancements ================= */

/* --- general page title --- */
.page-title {
  font-weight: 700;
  letter-spacing: .2px;
  color: #122029;
  margin-bottom: 18px !important;
  display: inline-block;
}

/* --- panel base (card) --- */
.panel {
  border: 0;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 8px 26px rgba(18, 32, 40, 0.08);
  transition: transform .22s cubic-bezier(.2,.9,.3,1), box-shadow .22s;
  background: #ffffff;
}

/* subtle lift on hover */
.panel:hover {
  transform: translateY(-6px);
  box-shadow: 0 18px 40px rgba(12, 30, 36, 0.12);
}

/* panel-body as gradient banner for stat cards */
.panel .panel-body {
  padding: 22px;
  display:flex;
  align-items:center;
  justify-content:center;
  flex-direction:column;
  gap:8px;
}

/* stat panel layout */
.stat-panel {
  width:100%;
  text-align:center;
  padding: 8px 6px;
}

/* big stat number with subtle animation */
.stat-panel-number {
  font-size: 40px;
  font-weight: 700;
  color: #081e23;
  line-height: 1;
  letter-spacing: -0.5px;
  transition: transform .25s;
  transform-origin: center;
}

/* small pulse when hover parent */
.panel:hover .stat-panel-number {
  transform: translateY(-4px);
}

/* stat title */
.stat-panel-title {
  font-size: 12px;
  color: #5e6b6f;
  text-transform: uppercase;
  font-weight: 700;
  letter-spacing: .12em;
  margin-top:4px;
}

/* footer anchor */
.block-anchor {
  display:block;
  padding: 10px 16px;
  text-align:center;
  text-decoration:none;
  color:#0b5560;
  background: linear-gradient(180deg, rgba(0,0,0,0.02), rgba(0,0,0,0.03));
  border-top: 1px solid rgba(0,0,0,0.04);
  font-weight:600;
  transition: background .18s, color .18s, transform .18s;
}
.block-anchor:hover {
  background: linear-gradient(90deg,#16a085,#1abc9c);
  color:#fff;
  transform: translateY(-2px);
}

/* --- color banners for existing bk-* classes (keeps your markup) --- */
.bk-primary { background: linear-gradient(135deg,#0ea5a4,#07575b); color:#fff; }
.bk-success { background: linear-gradient(135deg,#16a085,#0d8b73); color:#fff; }
.bk-info    { background: linear-gradient(135deg,#3ab0ff,#0b84e6); color:#fff; }
.bk-danger  { background: linear-gradient(135deg,#ff6b6b,#e05252); color:#fff; }
.bk-warning { background: linear-gradient(135deg,#ffb86b,#ff9a3d); color:#09201f; }

/* ensure panel-footer text contrast when banner is dark */
.panel .panel-footer, .panel .block-anchor { color: inherit; }

/* nice rounded corners for panels in grid */
.col-md-4 { margin-bottom: 18px; }

/* small responsive tweaks */
@media (max-width: 992px) {
  .stat-panel-number { font-size: 34px; }
}
@media (max-width: 640px) {
  .col-md-4 { flex: 0 0 100%; max-width: 100%; }
  .page-title { margin-top: 6px; display:block; }
}

/* subtle separators inside rows */
.row > .col-md-12 > .row {
  gap: 12px;
}

/* improve table-like lists (if any in page) */
.block-anchor .fa {
  margin-left: 8px;
  opacity: .9;
  transition: transform .2s;
}
.block-anchor:hover .fa { transform: translateX(6px); }

/* small accessibility: focus outline */
.block-anchor:focus, .panel:focus {
  outline: 3px solid rgba(16,185,129,0.12);
  outline-offset: 2px;
}

/* ---------- Optional micro animations for numbers ---------- */
/* animate numbers on load (non-invasive) */
@keyframes statPop {
  0% { transform: scale(.92); opacity: 0; }
  70% { transform: scale(1.02); opacity: .9; }
  100% { transform: scale(1); opacity: 1; }
}
.stat-panel-number { animation: statPop .6s cubic-bezier(.2,.85,.3,1); }

/* ================ end enhancements ================= */

	</style>


</head>

<body>
<?php include("includes/header.php");?>

	<div class="ts-main-content">
		<?php include("includes/sidebar.php");?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title" style="margin-top:4%">Dashboard</h2>
						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">



													<div class="stat-panel-number h1 "></div>
													<div class="stat-panel-title text-uppercase"> Students</div>
												</div>
											</div>
											<a href="manage-students.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
											
													<div class="stat-panel-number h1 "></div>
													<div class="stat-panel-title text-uppercase">Total Rooms </div>
												</div>
											</div>
											<a href="manage-rooms.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
												
													<div class="stat-panel-number h1 "></div>
													<div class="stat-panel-title text-uppercase">Total Courses</div>
												</div>
											</div>
											<a href="manage-courses.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									
								</div>





				<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">



													<div class="stat-panel-number h1 "></div>
													<div class="stat-panel-title text-uppercase"> Registered Complaints</div>
												</div>
											</div>
											<a href="all-complaints.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-danger text-light">
												<div class="stat-panel text-center">
												
													<div class="stat-panel-number h1 "></div>
													<div class="stat-panel-title text-uppercase">New Complaints </div>
												</div>
											</div>
											<a href="new-complaints.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">
												
													<div class="stat-panel-number h1 "></div>
													<div class="stat-panel-title text-uppercase">In Process Complaints</div>
												</div>
											</div>
											<a href="inprocess-complaints.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									
								</div>
							</div>
						</div>

					


				<div class="row">
							<div class="col-md-12">
								<div class="row">
					
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
											
													<div class="stat-panel-number h1 "></div>
													<div class="stat-panel-title text-uppercase">Closed Complaints </div>
												</div>
											</div>
											<a href="closed-complaints.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="panel panel-success">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
												
													<div class="stat-panel-number h1 "></div>
													<div class="stat-panel-title text-uppercase">Total Feedbacks</div>
												</div>
											</div>
											<a href="feedbacks.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
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
<!-- 	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script> -->

</body>

</html>