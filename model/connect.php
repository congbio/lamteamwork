<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "congshopthoitrang";
$conn = mysqli_connect($host, $user, $password, $database);
mysqli_set_charset($conn, 'UTF8');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else ;