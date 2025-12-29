<?php
session_start();
include('includes/config.php');

?>


<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin login</title>

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head
<body>
	
	<div class="login-page bk-img" style="background-image: url(img/login-bg.jpg);">
	
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3" style="margin-top:4%">
						<h1 class="text-center text-bold text-light mt-4x">Hostel Management System</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
<?php
if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$password= md5($password);
$stmt=$mysqli->prepare("SELECT username,email,password,id FROM admin WHERE (userName=?|| email=?) and password=? ");
				$stmt->bind_param('sss',$username,$username,$password);
				$stmt->execute();
				$stmt -> bind_result($username,$username,$password,$id);
				$rs=$stmt->fetch();
				$_SESSION['id']=$id;
				$uip=$_SERVER['REMOTE_ADDR'];
				$ldate=date('d/m/Y h:i:s', time());
				if($rs)
				{
                //  $insert="INSERT into admin(adminid,ip)VALUES(?,?)";
   // $stmtins = $mysqli->prepare($insert);
   // $stmtins->bind_param('sH',$id,$uip);
    //$res=$stmtins->execute();
					header("location:dashboard.php");
				}

				else
				{
					 echo "<div style='color:red; font-weight:bold;'>Wrong Username or Password ❌</div>";
				}
			}
				?>

							
								<form action="" class="mt" method="post">
									<label for="" class="text-uppercase text-sm">Your Username or Email</label>
									<input type="text" placeholder="Username" name="username" class="form-control mb">
									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" placeholder="Password" name="password" class="form-control mb">
									

									<input type="submit" name="login" class="btn btn-primary btn-block" value="login" >
								</form>
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

	<style>
		/* ---------- Background ---------- */
.login-page{
    min-height:100vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display:flex;
    align-items:center;
}

/* ---------- Dark Overlay ---------- */
.login-page::before{
    content:"";
    position:absolute;
    inset:0;
    background:rgba(0,0,0,0.45);
    z-index:1;
}

.login-page .form-content{
    width:100%;
    position: relative;
    z-index:2;
}

/* ---------- Title ---------- */
.login-page h1{
    letter-spacing:1px;
    font-weight:700;
    margin-bottom:25px;
    text-shadow:0 3px 10px rgba(0,0,0,0.4);
}

/* ---------- Login Card ---------- */
.login-page .well{
    border-radius:15px;
    border:none;
    background:rgba(255,255,255,0.95);
    box-shadow:0 15px 40px rgba(0,0,0,0.25);
    padding:30px 20px;
}

/* ---------- Labels ---------- */
.login-page label{
    font-weight:600;
    color:#555;
    margin-top:10px;
}

/* ---------- Inputs ---------- */
.login-page .form-control{
    height:44px;
    border-radius:10px;
    border:1px solid #ddd;
    transition:.3s ease;
}

.login-page .form-control:focus{
    border-color:#5b86e5;
    box-shadow:0 0 0 2px rgba(91,134,229,0.2);
}

/* ---------- Button ---------- */
.login-page .btn-primary{
    border-radius:30px;
    margin-top:15px;
    font-size:15px;
    letter-spacing:1px;
    padding:12px 0;
    background:linear-gradient(135deg,#36d1dc,#5b86e5);
    border:none;
    transition:.3s ease;
}

.login-page .btn-primary:hover{
    transform:translateY(-2px);
    box-shadow:0 10px 20px rgba(0,0,0,0.2);
}

/* ---------- Mobile fix ---------- */
@media(max-width:768px){
    .login-page .well{
        padding:20px 15px;
    }
}

	</style>
</body>
</html>