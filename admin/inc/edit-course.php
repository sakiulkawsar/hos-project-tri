<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Edit Course</title>

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

<!-- HEADER -->
<header class="brand clearfix">
	<h3 style="padding:10px;color:#fff;">Hostel Management</h3>
</header>

<div class="ts-main-content">

<!-- SIDEBAR -->
<aside style="padding:15px;color:#fff;background:#2c3e50;">
	<ul>
		<li>Dashboard</li>
		<li>Courses</li>
		<li>Edit Course</li>
	</ul>
</aside>

<div class="content-wrapper">
<div class="container-fluid">

<div class="row">
<div class="col-md-12">

<h2 class="page-title">Edit Course</h2>

<div class="row">
<div class="col-md-12">

<div class="panel panel-default">
<div class="panel-heading">Edit courses</div>

<div class="panel-body">

<form class="form-horizontal">

<div class="hr-dashed"></div>

<div class="form-group">
	<label class="col-sm-2 control-label">Course Code</label>
	<div class="col-sm-8">
		<input type="text" name="cc" value="CSE101" class="form-control">
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Course Name (Short)</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" name="cns" id="cns" value="CSE" required>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Course Name (Full)</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" name="cnf" value="Computer Science and Engineering">
	</div>
</div>

<div class="col-sm-8 col-sm-offset-2">
	<input class="btn btn-primary" type="submit" value="Update Course">
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

</body>
</html>
