<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "job_db";

$conn = new mysqli($host, $user, $password, $dbname);

// die("Connection success: ");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
