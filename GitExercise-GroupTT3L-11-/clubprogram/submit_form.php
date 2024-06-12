<?php
session_start();
if(!isset($_SESSION["username"])) {
    header("location:index.php");
    exit();
}

$servername = "localhost";
$username = "club_admin";
$password = "1234";  
$dbname = "club_program";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $club = $_POST['club'];

    $sql = "INSERT INTO club_submissions (name, email, club) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $club);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
