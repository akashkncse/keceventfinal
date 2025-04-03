<?php

include('connection.php');
session_start();

$correct_username = "admin"; // Change this to your desired admin username
$correct_password = "password123"; // Change this to your desired admin password
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if ($username === $correct_username && $password === $correct_password) {
    $_SESSION['admin_logged_in'] = true;
    $_SESSION['admin_username'] = $username;
    header("Location: eventregister.php");
    exit;
} else {
    $_SESSION['login_error'] = true;
    header("Location: admin.php?error=1");
    exit;
}
?>