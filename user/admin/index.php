<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
	die("connectio error");
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

	else if($row["usertype"]=="admin")
	{ 
		$_SESSION["username"]=$username;
		header("location:adminhome.php");

	}
	else
	{
		echo "username or password incorrect";
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<center>
<head>
	<title>MMU Clubhub Connect</title>

	<div style="background-color: aquamarine; width: 1000px; height: 600px;">
</head>
<body>



	<h1>Login For Free Cookie</h1>
	<br>
	<div style="background-color: aquamarine; width: 700px; height: 400px;">
		<br><br>


		<form action="#" method="POST">

	<div>
		<h3><label>Username</label></h3>
		<input type="text" name="username" required>
	</div>
    <br>
    <div>
		<h3><label>Password</label></h3>
		<input type="password" name="password" required>
	</div>
	<br><br>

	<div>
		
		<input type="submit" value="Login">
	</div>
</html>