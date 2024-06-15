<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "feedback";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if(!$conn){
    die("Can not connect" . mysqli_connect_error());
}

$user = $_POST["username"];
$email = $_POST["email"];
$club = $_POST["club"];
$message = $_POST["message"];

$sql = "INSERT INTO greetings (username, email, club, message) VALUES ('$user', '$email', '$club', '$message')";

if(mysqli_query($conn, $sql)){
    echo ("Data added Successfully");
}
else {
    echo "Something went wrong";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="send.php" method="POST">
        <fieldset>
            <legend>FEEDBACK FORM</legend>
            <label for="username">Username:</label><br>
        <input type="text" class="username" id="username" placeholder="Username" name="username"><br><br>

        <label for="email">Email:</label><br>
        <input type="text" class="email" id="email" placeholder="email" name="email"><br><br>

        <label for="club">Club Categories</label><br>
        <input type="text" class="club" id="club" placeholder="club" name="club"><br><br>

        <label for="message">Message:</label><br>
        <textarea placeholder="Write your message..." class="message" name="message"></textarea>
        <br><br>
        <input type="submit" value="Submit" class="btn">
        </fieldset>
        
    </form>
    <script src="script.js"></script>
</body>
</html>