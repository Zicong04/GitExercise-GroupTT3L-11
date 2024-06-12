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

$sql = "SELECT id, name, email, club, submission_date FROM club_submissions";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin View - Club Submissions</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <h1>Club Submissions</h1>
        <nav>
            <button><a href="" class="back">Back</a></button>
        </nav>
    </header>
    <main>
        <section id="submissions">
            <h2>Submitted Forms</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Club</th>
                    <th>Submission Date</th>
                </tr>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["club"]. "</td><td>" . $row["submission_date"]. "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No submissions found</td></tr>";
                }
                $conn->close();
                ?>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Join the Club Program. All rights reserved.</p>
    </footer>
</body>
</html>
