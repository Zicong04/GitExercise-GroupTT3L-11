<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'hantok_user';
$DATABASE_PASS = 'rkUP13Pt0*';
$DATABASE_NAME = 'hantok_user';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Check if data was submitted
if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
    exit('Please complete the registration form!');
}

// Ensure values are not empty
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
    exit('Please complete the registration form');
}

// Check if the account with that username exists
if ($stmt = $con->prepare('SELECT id FROM accounts WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        echo 'Username exists, please choose another!';
    } else {
        // Username doesn't exist, insert new account
        if ($stmt = $con->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)')) {
            // Insert plain text password
            $password = $_POST['password']; // Store password as plain text
            $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
            $stmt->execute();
            echo 'You have successfully registered! You can now login!';
        } else {
            echo 'Could not prepare statement!';
        }
    }
    $stmt->close();
} else {
    echo 'Could not prepare statement!';
}

$con->close();
?>

<!DOCTYPE html>
<html>       <div class="item">  <a href="index.php">CLICK here for login!</a>  
</html>