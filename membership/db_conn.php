<?php

$sname= "localhost";
$unmae= "hantok_user";
$password = "rkUP13Pt0*";

$db_name = "hantok_user";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}