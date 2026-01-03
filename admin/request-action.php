<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

// Check if id and action are set
if(isset($_GET['action'], $_GET['id'])) {

    $id = intval($_GET['id']);
    $action = $_GET['action'];

    if($action === 'accept') {
        $sql = "UPDATE users_request SET status='accepted' WHERE id=?";
    }
    elseif($action === 'reject') {
        $sql = "UPDATE users_request SET status='rejected' WHERE id=?";
    }
    elseif($action === 'delete') {
        $sql = "DELETE FROM users_request WHERE id=?";
    }

    if(isset($sql)) {
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
}

// Redirect back to manage page
header("Location: manage-requests.php");
exit;
