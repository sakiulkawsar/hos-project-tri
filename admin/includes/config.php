<?php
$dbuser="root";
$dbpass="";
$host="localhost";
$db="hostel";
$mysqli =new mysqli($host,$dbuser, $dbpass, $db);

  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: *");
?>