<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>User</title>
</head>
<body>

<h1> USER PAGE </h1><?php echo $_SESSION["username"] ?>

<a href="logout.php">Logout</a>

</body>
</html>
