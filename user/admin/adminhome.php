<?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:userhome.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
</head>
<body>

<h1> Admin </h1><?php echo $_SESSION["username"] ?>

<a href="logout.php">Logout</a>

</body>
</html>