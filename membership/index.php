<?php
session_start();
if(!isset($_SESSION["username"]))


?>

<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="signup.php" method="post">
        <h2>SIGN UP TO OUR MEMBERSHIP</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Username</label>
        <input type="text" name="uname" placeholder="Username" required><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required><br>

        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
