<?php
$servername = "localhost"; 
$username = "hantok_user"; 
$password = "rkUP13Pt0*"; 
$dbname = "hantok_user";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>