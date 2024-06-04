<?php
// Database connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "feedback_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch feedback data
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Message: " . $row["message"] . "<br>";
        echo "Timestamp: " . $row["timestamp"] . "<br><br>";
    }
} else {
    echo "No feedback found";
}

// Close connection
$conn->close();
?>
