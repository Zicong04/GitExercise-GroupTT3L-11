<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'hantok_user';
$DATABASE_PASS = 'rkUP13Pt0*';
$DATABASE_NAME = 'hantok_user';


$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>
