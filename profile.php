<?php

session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}


$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Fetch user details from the database
$stmt = $con->prepare('SELECT username, password, email, clubjoin, membership FROM accounts WHERE id = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($username, $password, $email, $clubjoin, $membership);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Profile Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body class="loggedin">
    <nav class="navtop">
        <div>
            <a href="http://localhost:3000/GitExercise-GroupTT3L-11/GitExercise-GroupTT3L-11/page/zmainpage/userhome.php"><i class="fas fa-sign-out-alt"></i>Home</a>
            <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            <a href="http://localhost:3000/GitExercise-GroupTT3L-11/GitExercise-GroupTT3L-11/page/zmainpage/Dailysystem.php">Daily check in</a>
        </div>
    </nav>
    <div class="content">
        <h2>Profile Page</h2>
        <div>
            <p>Your account details are below:</p>
            <table>
                <tr>
                    <td>Username:</td>
                    <td><?=htmlspecialchars($username, ENT_QUOTES)?></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><?=htmlspecialchars($password, ENT_QUOTES)?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?=htmlspecialchars($email, ENT_QUOTES)?></td>
                </tr>
                <tr>
                    <td>Club Joined:</td>
                    <td><?=htmlspecialchars($clubjoin, ENT_QUOTES)?></td>
                </tr>
                <tr>
                    <td>Membership:</td>
                    <td><?=htmlspecialchars($membership, ENT_QUOTES)?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
