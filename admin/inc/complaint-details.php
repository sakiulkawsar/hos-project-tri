<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>Complaint Details</title>

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
		<li>Complaints</li>
		<li>Closed Complaints</li>
		<li>Logout</li>
	</ul>
</aside>

<div class="content-wrapper">
<div class="container-fluid">

<div class="row" id="print">

<div class="col-md-12">

<h2 class="page-title" style="margin-top:3%">#COMP1020 Details</h2>

<div class="panel panel-default">
<div class="panel-heading">#COMP1020 Details</div>

<div class="panel-body">

<table class="table table-bordered" cellspacing="0" width="100%" border="1">

<tbody>

<tr>
<td colspan="6" style="text-align:center;color:blue">
<h4>Complaint Related Info</h4>
</td>
</tr>

<tr>
<th>Complaint Number</th>
<td>COMP1020</td>
<th>Registration Date</th>
<td>2025-02-10</td>
</tr>

<tr>
<th>Complaint Type</th>
<td>Electric</td>
<th>File (if any)</th>
<td>NA</td>
</tr>

<tr>
<th>Complaint Details</th>
<td colspan="3">
Light not working in room.
</td>
</tr>

<tr>
<th>Complaint Status</th>
<td colspan="3">In Process</td>
</tr>

</tbody>

</table>

<!-- HISTORY TABLE -->

<table class="table table-bordered" cellspacing="0" width="100%" border="1">

<tr>
<th colspan="3" style="color:blue;font-size:18px;text-align:center">
Complaint History
</th>
</tr>

<tr>
<th>Complaint Remark</th>
<th>Complaint Status</th>
<th>Posting Date</th>
</tr>

<tr>
<td>Technician assigned</td>
<td>In Process</td>
<td>2025-02-11</td>
</tr>

<tr>
<td>Fixed light issue</td>
<td>Closed</td>
<td>2025-02-12</td>
</tr>

</table>

<button type="button" class="btn btn-info">
Take Action
</button>

</div>
</div>
</div>

</div>
</div>
</div>
</div>


<!-- MODAL (STATIC ONLY) -->

<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">
<button type="button" class="close">&times;</button>
<h4 class="modal-title">Take Action</h4>
</div>

<form>
<div class="modal-body">

<p>
<select class="form-control">
<option>Select Status</option>
<option>In Process</option>
<option>Closed</option>
</select>
</p>

<p>
<textarea placeholder="Remark or Message" rows="6" class="form-control"></textarea>
</p>

<p>
<input type="submit" value="Submit" class="btn btn-primary">
</p>

</div>
</form>

<div class="modal-footer">
<button type="button" class="btn btn-default">Close</button>
</div>

</div>
</div>
</div>

</body>
</html>
