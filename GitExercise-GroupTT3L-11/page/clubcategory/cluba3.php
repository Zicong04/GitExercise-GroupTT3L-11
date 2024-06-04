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
    <link rel="stylesheet" href="style1.css">
    <title>Explore Clubs</title>
    <style>
    </style>
</head>
<body>
    <header>
        <h1>Announcement</h1>
        <button id="openBtn" class="button"><span>Explore clubs</span></button>
        <div id="profilePopup" class="popup">
            <div class="popup-content">
                <div class="profile-header">
                    <span class="closeBtn">&times;</span>
                </div>
                <div class="wordopenprofile">
                <p> <a href="clubdetails3.php">Previous</a></p>
                <p> <a href="http://localhost:3000/GitExercise-GroupTT3L-11/GitExercise-GroupTT3L-11/page/zmainpage/userhome.php">Home</a></p>
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
    <section id="arts">
            <h3>Arts Clubs</h3>
            <ul>
                <li><strong>Drama Club:</strong> Participate in plays and drama workshops. Meets every Monday and Thursday at 5 PM.</li>
                <li><strong>Music Club:</strong> For musicians and music lovers. Meets every Tuesday at 4 PM.</li>
                <li><strong>Art Club:</strong> Create and discuss art. Meets every Friday at 3 PM.</li>
            </ul>
        </section>
        </main>
    <footer>
    <p> &copy; 2024 MMU Clubhub Connect. All Rights Reserved.</p>
    </footer>
</body>
</html>