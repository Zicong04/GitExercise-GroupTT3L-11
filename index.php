<a?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
        <link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
                <div class="item">  <a href="register1.php">No account? CLICK here for register!</a>     
                </div>
            </label>
			</form>
		</div>
	</body>
</html>