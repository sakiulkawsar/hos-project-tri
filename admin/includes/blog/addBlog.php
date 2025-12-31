<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

include_once('../config.php');

// echo "Hello";
$data = file_get_contents("php://input");
$data = json_decode($data);

// print_r($data);

$name = $data->name;
$email = $data->email;
$phone = $data->phone;
$comment = $data->comment;
if($name!=''&& $email!=''&& $phone!=''&& $comment!=''){

$db->query("INSERT INTO test VALUE(NULL, '$title', '$details', '$phone', '$comment')");
}
if($db->affected_rows){
    echo "Successfully add";
}
?>