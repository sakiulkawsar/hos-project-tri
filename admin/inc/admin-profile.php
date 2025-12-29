<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Admin Profile</title>

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

	<!-- Header Placeholder -->
	<div></div>

	<div class="ts-main-content">

		<!-- Sidebar Placeholder -->
		<div></div>

		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Admin Profile</h2>

						<div class="row">

							<!-- Admin Profile Panel -->
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">Admin profile details</div>
									<div class="panel-body">

										<form method="post" class="form-horizontal">

											<div class="hr-dashed"></div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Username</label>
												<div class="col-sm-10">
													<input type="text" value="admin" disabled class="form-control">
													<span class="help-block m-b-none">Username can't be changed.</span>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Email</label>
												<div class="col-sm-10">
													<input type="email" class="form-control" name="emailid" id="emailid" value="admin@example.com" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Reg Date</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" value="2025-01-01" disabled>
												</div>
											</div>

											<div class="col-sm-8 col-sm-offset-2">
												<button class="btn btn-default" type="submit">Cancel</button>
												<input class="btn btn-primary" type="submit" name="update" value="Update Profile">
											</div>

										</form>

									</div>
								</div>
							</div>

							<!-- Change Password Panel -->
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">Change Password</div>
									<div class="panel-body">

										<form method="post" class="form-horizontal" name="changepwd" id="change-pwd">

											<div class="hr-dashed"></div>

											<div class="form-group">
												<label class="col-sm-4 control-label">Old Password</label>
												<div class="col-sm-8">
													<input type="password" name="oldpassword" id="oldpassword" class="form-control" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-4 control-label">New Password</label>
												<div class="col-sm-8">
													<input type="password" class="form-control" name="newpassword" id="newpassword" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-4 control-label">Confirm Password</label>
												<div class="col-sm-8">
													<input type="password" class="form-control" id="cpassword" name="cpassword" required>
												</div>
											</div>

											<div class="col-sm-6 col-sm-offset-4">
												<button class="btn btn-default" type="submit">Cancel</button>
												<input type="submit" name="changepwd" value="Change Password" class="btn btn-primary">
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

	<!-- All JavaScript Removed -->

</body>
</html>
