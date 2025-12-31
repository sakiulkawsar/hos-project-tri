<?php
include_once('../config.php');

$rowdata = $mysqli->query("SELECT * FROM users_request");

$output = [];

while ($row = $rowdata->fetch_object()) {
    $output[] = $row;
}

echo json_encode($output);
