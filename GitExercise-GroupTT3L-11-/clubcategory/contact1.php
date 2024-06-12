<a?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact information</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <h1>Contact information </h1>
        <button id="openBtn" class="button"><span>Previous</span></button>
        <div id="profilePopup" class="popup">
            <div class="popup-content">
                <div class="profile-header">
                    <span class="closeBtn">&times;</span>
                </div>
                <div class="wordopenprofile">
                <p> <a href="clubcategory.php">Previous</a></p>
                </div>
                </div>
            </div>
        </div>
    
        <script>
            document.getElementById("openBtn").addEventListener("click", function() {
                document.getElementById("profilePopup").style.display = "block";
            });
    
            document.querySelector(".closeBtn").addEventListener("click", function() {
                document.getElementById("profilePopup").style.display = "none";
            });
        </script>
    </header>
    <main>
            <div class="club">
            <h2>CONTACT INFO</h2>
            <p>Email: MMUClubhub@gmail.com</p>
            </div>
            <div class="club">
            <h2>OPERATING HOURS</h2>
            <p>Sunday, Monday, Tuesday:</p>
            <p>7.30am – 12.00am</p>

            <p>Wednesday, Thursday, Friday:</p>
            <p>7.30am – 1.00am</p>

<p>Saturday & Eve Of Public Holiday:</p>
<p>7.30am – 2.00am</p>
            </div>
            <div class="club">
            <h2>ADDRESS</h2>
            <p>Persiaran Multimedia, 63100 Cyberjaya, Selangor</p>
            </div>
            <div class="club">
            </div>
    </main>
    <footer>
        <p> &copy; 2024 MMU Clubhub Connect. All Rights Reserved.</p>
    </footer>
</body>
</html>
