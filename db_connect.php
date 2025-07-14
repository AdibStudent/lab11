<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "lab11db";

$con = new mysqli($host, $user, $pass, $db);

// Handle connection errors
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
