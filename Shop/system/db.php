<?php
$servername = "localhost";
$database = "tanershop";
$username = "root";
$password = "";
session_start();
ob_start('compress');
date_default_timezone_set('Europe/Istanbul');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . 
mysqli_connect_error());
}
//mysqli_close($conn);
?>