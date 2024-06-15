<?php

$host="localhost";
$user="hantok_user";
$password="rkUP13Pt0*";
$db="hantok_user";

session_start();

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
	die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];

	$sql="select * from login where username= '".$username."' AND password='".$password."'
	";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{   
		$_SESSION["username"]=$username;
		header("location:userhome.php");

	}

	elseif($row["usertype"]=="admin")
	{ 
		$_SESSION["username"]=$username;
		header("location:adminhome.php");

	} else {
       echo "Wrong Username / Password.";
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<center>
<head>
	<title>MMU Clubhub Connect</title>
	<link rel="stylesheet" href="page.css">
</head>
<div class= "bodys"> 
	<div class="yi">	
	<h1><b> Login </b></h1>
	
	<br>
		<form action="#" method="POST">

	<div>
		<div class="input-box">
		<h3> Username :<h3>
		<input type="text" name="username" required>
		<i class='bx bxs-user'></i>
		</div>
	</div>

    <br>

    <div>
		<div class="input-bos">
		<h3> Password :<h3>
		<input type="password" name="password" required>
		<i class='bx bx-lock'></i>
		</div>
	</div>

	<br><br>

	<div>
		
		<button type="submit" class="btn">Login</button>
	</div>
	</div>
</div>
</html>