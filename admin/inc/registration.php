<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Student Hostel Registration</title>
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
	<!-- Header -->
	<header><!-- header content placeholder --></header>

	<div class="ts-main-content">
		<!-- Sidebar -->
		<aside><!-- sidebar content placeholder --></aside>

		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">					
						<h2 class="page-title">Registration </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Info</div>
									<div class="panel-body">
										<form method="post" action="" class="form-horizontal">
											<!-- Room Related info -->
											<div class="form-group">
												<label class="col-sm-4 control-label"><h4 style="color: green" align="left">Room Related info </h4></label>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Room no. </label>
												<div class="col-sm-8">
													<select name="room" id="room" class="form-control" required> 
														<option value="">Select Room</option>
														<option value="101">101</option>
														<option value="102">102</option>
													</select> 
												</div>
											</div>
												
											<div class="form-group">
												<label class="col-sm-2 control-label">Seater</label>
												<div class="col-sm-8">
													<input type="text" name="seater" id="seater"  class="form-control" readonly>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Fees Per Month</label>
												<div class="col-sm-8">
													<input type="text" name="fpm" id="fpm"  class="form-control" readonly>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Food Status</label>
												<div class="col-sm-8">
													<input type="radio" value="0" name="foodstatus" checked> Without Food
													<input type="radio" value="1" name="foodstatus"> With Food(Rs 2000.00 Per Month Extra)
												</div>
											</div>	

											<div class="form-group">
												<label class="col-sm-2 control-label">Stay From</label>
												<div class="col-sm-8">
													<input type="date" name="stayf" id="stayf" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Duration</label>
												<div class="col-sm-8">
													<select name="duration" id="duration" class="form-control">
														<option value="">Select Duration in Month</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
													</select>
												</div>
											</div>

											<!-- Personal Info -->
											<div class="form-group">
												<label class="col-sm-2 control-label"><h4 style="color: green" align="left">Personal info </h4></label>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Registration No : </label>
												<div class="col-sm-8">
													<input type="text" name="regno" id="regno" class="form-control" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">First Name : </label>
												<div class="col-sm-8">
													<input type="text" name="fname" id="fname" class="form-control" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Middle Name : </label>
												<div class="col-sm-8">
													<input type="text" name="mname" id="mname" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Last Name : </label>
												<div class="col-sm-8">
													<input type="text" name="lname" id="lname" class="form-control" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Gender : </label>
												<div class="col-sm-8">
													<select name="gender" class="form-control" required>
														<option value="">Select Gender</option>
														<option value="male">Male</option>
														<option value="female">Female</option>
														<option value="others">Others</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Contact No : </label>
												<div class="col-sm-8">
													<input type="text" name="contact" id="contact" class="form-control" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Email id : </label>
												<div class="col-sm-8">
													<input type="email" name="email" id="email" class="form-control" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Emergency Contact: </label>
												<div class="col-sm-8">
													<input type="text" name="econtact" id="econtact" class="form-control" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Guardian  Name : </label>
												<div class="col-sm-8">
													<input type="text" name="gname" id="gname" class="form-control" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Guardian  Relation : </label>
												<div class="col-sm-8">
													<input type="text" name="grelation" id="grelation" class="form-control" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Guardian Contact no : </label>
												<div class="col-sm-8">
													<input type="text" name="gcontact" id="gcontact" class="form-control" required>
												</div>
											</div>	

											<!-- Correspondence Address -->
											<div class="form-group">
												<label class="col-sm-3 control-label"><h4 style="color: green" align="left">Correspondence Address </h4></label>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Address : </label>
												<div class="col-sm-8">
													<textarea rows="5" name="address" id="address" class="form-control" required></textarea>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">City : </label>
												<div class="col-sm-8">
													<input type="text" name="city" id="city" class="form-control" required>
												</div>
											</div>	

											<div class="form-group">
												<label class="col-sm-2 control-label">State </label>
												<div class="col-sm-8">
													<select name="state" id="state" class="form-control" required>
														<option value="">Select State</option>
														<option value="State1">State1</option>
														<option value="State2">State2</option>
													</select> 
												</div>
											</div>							

											<div class="form-group">
												<label class="col-sm-2 control-label">Pincode : </label>
												<div class="col-sm-8">
													<input type="text" name="pincode" id="pincode" class="form-control" required>
												</div>
											</div>	

											<!-- Permanent Address -->
											<div class="form-group">
												<label class="col-sm-3 control-label"><h4 style="color: green" align="left">Permanent Address </h4></label>
											</div>

											<div class="form-group">
												<label class="col-sm-5 control-label">Permanent Address same as Correspondence address : </label>
												<div class="col-sm-4">
													<input type="checkbox" name="adcheck" value="1"/>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Address : </label>
												<div class="col-sm-8">
													<textarea rows="5" name="paddress" id="paddress" class="form-control" required></textarea>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">City : </label>
												<div class="col-sm-8">
													<input type="text" name="pcity" id="pcity" class="form-control" required>
												</div>
											</div>	

											<div class="form-group">
												<label class="col-sm-2 control-label">State </label>
												<div class="col-sm-8">
													<select name="pstate" id="pstate" class="form-control" required>
														<option value="">Select State</option>
														<option value="State1">State1</option>
														<option value="State2">State2</option>
													</select> 
												</div>
											</div>							

											<div class="form-group">
												<label class="col-sm-2 control-label">Pincode : </label>
												<div class="col-sm-8">
													<input type="text" name="ppincode" id="ppincode" class="form-control" required>
												</div>
											</div>	

											<div class="col-sm-6 col-sm-offset-4">
												<button class="btn btn-default" type="reset">Cancel</button>
												<input type="submit" name="submit" value="Register" class="btn btn-primary">
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

</body>
</html>
