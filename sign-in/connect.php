<?php
$servername = "localhost";
$username = "user21004";
$password = "pwd21004";
$dbname = "db21004";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("DB연결실패: " . $conn->connect_error);
}
//echo "DB연결성공";
?>