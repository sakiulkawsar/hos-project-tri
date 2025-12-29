<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

if (!isset($_GET['id'])) {
    die("Invalid Request");
}

$id = intval($_GET['id']);

if (isset($_POST['submit'])) {

  
    $tmeal   = $_POST['tmeal'];
    $due   =$_POST['due'];
    $amount = $_POST['amount'];
    $tamount = $_POST['tamount'];

    $query = "UPDATE pament SET tmeal=?, due=?, amount=?, tamount=? WHERE id=?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("iiiii", $tmeal, $due, $amount, $tamount, $id);
    $stmt->execute();

    echo "<script>alert('Payment Details Updated Successfully');</script>";
}

$ret = "SELECT * FROM pament WHERE id=?";
$stmt = $mysqli->prepare($ret);
$stmt->bind_param("i", $id);
$stmt->execute();
$res = $stmt->get_result();
$row = $res->fetch_object();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Payment</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

<?php include('includes/header.php'); ?>

<div class="container" style="margin-top:30px;">
    <h2>Edit Payment Details</h2>

    <form method="post" class="form-horizontal">


        <div class="form-group">
            <label class="col-sm-2 control-label">Total meal</label>
            <div class="col-sm-8">
                <input type="text" name="tmeal"
                       value="<?php echo $row->tmeal; ?>"
                       class="form-control" required>
            </div>
        </div>

           <div class="form-group">
            <label class="col-sm-2 control-label">Due amount</label>
            <div class="col-sm-8">
                <input type="number" name="due"
                       value="<?php echo $row->due; ?>"
                       class="form-control" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Current amount</label>
            <div class="col-sm-8">
                <input type="number" name="amount"
                       value="<?php echo $row->amount; ?>"
                       class="form-control" required>
            </div>
        </div>

         <div class="form-group">
            <label class="col-sm-2 control-label">Total amount</label>
            <div class="col-sm-8">
                <input type="number" name="tamount"
                       value="<?php echo $row->amount; ?>"
                       class="form-control" required>
            </div>
        </div>

        <div class="col-sm-8 col-sm-offset-2">
            <button type="submit" name="submit" class="btn btn-primary">
                Update Payment
            </button>
        </div>

    </form>
</div>

</body>
</html>
