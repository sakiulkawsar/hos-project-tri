<?php
include_once('../config.php');

// echo "Hello";
$data = file_get_contents("php://input");
$data = json_decode($data);

// print_r($data);

$name = $data->name;
$email = $data->email;
$phone = $data->mobile;
$comment = $data->comment;


$sql = "INSERT INTO `users_request`(`name`, `email`, `mobile`, `comment`) VALUES ('$name','$email','$phone','$comment')";


if($name!=''&& $email!=''&& $phone!=''&& $comment!=''){

$mysqli->query("$sql");

}
if($mysqli->affected_rows){
    echo "Successfully add";
}
?>