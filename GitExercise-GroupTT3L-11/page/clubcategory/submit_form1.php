<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:index.php");
    exit();
}

include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $club = $conn->real_escape_string($_POST['club']);

    $sql = "INSERT INTO registrations (name, email, club) VALUES ('$name', '$email', '$club')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <h1>Join the Club Program</h1>
    </header>
    <main>
        <section id="home">
            <h2>Registration Successful</h2>
            <h2>Thank you for joining the club!</h2>
            <center><button><h2><a href="clubcategory.php" class="back">Back to Club Categories</a></h2></button></center>
        </section>
    </main>
    <footer>
        <p> &copy; 2024 MMU Clubhub Connect. All Rights Reserved.</p>
    </footer>
</body>
</html>
