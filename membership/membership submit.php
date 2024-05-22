
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "membership";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if(!$conn){
    die("Can not connect" . mysqli_connect_error());
}

$user = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO greetings (username, email, password) VALUES ('$user', '$email', '$password')";

if(mysqli_query($conn, $sql)){
    echo ("Sign Up Successfully");
}
else {
    echo "Something went wrong";
}


?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="process_signup.php" method="post" style="border:1px solid #ccc">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Sign up to join our club membership.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our Terms and Conditions.</p>

        <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</form>

</body>
</html>
