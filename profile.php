<?php
session_start();
if (!isset($_SESSION["username"])) {
}

// Enable detailed error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection details
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'hantok_user';
$DATABASE_PASS = 'rkUP13Pt0*';
$DATABASE_NAME = 'hantok_user';

// Create connection
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

// Check connection
if (!$con) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}


// Fetch user details from the database
$stmt = $con->prepare('SELECT username, password, email, clubjoin, membership FROM accounts WHERE id = ?');
if ($stmt === false) {
    die("Error preparing statement: " . htmlspecialchars($con->error));
}

$stmt->bind_param('i', $_SESSION['id']);
if (!$stmt->execute()) {
    die("Error executing statement: " . htmlspecialchars($stmt->error));
}
$stmt->bind_result($username, $password, $email, $clubjoin, $membership);
$stmt->fetch();
$stmt->close();


// Fetch redeemed vouchers from the database
$vouchers = [];
$stmt = $con->prepare('SELECT voucher_name FROM vouchers WHERE user_id = ?');
if ($stmt === false) {
    die("Error preparing statement: " . htmlspecialchars($con->error));
}

$stmt->bind_param('i', $_SESSION['id']);
if (!$stmt->execute()) {
    die("Error executing statement: " . htmlspecialchars($stmt->error));
}
$stmt->bind_result($voucher_name);
while ($stmt->fetch()) {
    $vouchers[] = $voucher_name;
}
$stmt->close();


// Close the connection
$con->close();
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
            <a href="http://mmuclubhubconnect.website/userhome.php"><i class="fas fa-home"></i>Home</a>
            <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            <a href="http://mmuclubhubconnect.website/Dailysystem.php">Daily check in</a>
        </div>
    </nav>
    <div class="content">
        <h2>Profile Page</h2>
        <div>
            <p>Your account details are below:</p>
            <table>
                <tr>
                    <td>Username:</td>
                    <td><?= htmlspecialchars($username, ENT_QUOTES) ?></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><?= htmlspecialchars($password, ENT_QUOTES) ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?= htmlspecialchars($email, ENT_QUOTES) ?></td>
                </tr>
                <tr>
                    <td>Club Joined:</td>
                    <td><?= htmlspecialchars($clubjoin, ENT_QUOTES) ?></td>
                </tr>
                <tr>
                    <td>Membership:</td>
                    <td><?= htmlspecialchars($membership, ENT_QUOTES) ?></td>
                </tr>
            </table>
            <h3>Redeemed Vouchers</h3>
            <ul>
                <?php
                if (count($vouchers) > 0) {
                    foreach ($vouchers as $voucher) {
                        echo "<li>" . htmlspecialchars($voucher, ENT_QUOTES) . "</li>";
                    }
                } else {
                    echo "<li>No vouchers redeemed yet.</li>";
                }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>