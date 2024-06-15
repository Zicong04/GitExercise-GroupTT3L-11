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
    <title>Join the Club Program</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <h1>Join the Club Program</h1>
        <button id="openBtn" class="button"><span>Previous</span></button>
        <div id="profilePopup" class="popup">
            <div class="popup-content">
                <div class="profile-header">
                    <span class="closeBtn">&times;</span>
                </div>
                <div class="wordopenprofile">
                <p> <a href="http://mmuclubhubconnect.website/userhome.php">Home</a></p>
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
        <section id="home">
            <h2>Welcome to Join the Club Program</h2>
            <p>Join our program to become a member of various clubs and enjoy exciting activities!</p>
        </section>
        <section id="about">
            <h2>About Us</h2>
            <p>Our Join the Club program helps students find and join clubs that match their interests and passions.</p>
        </section>
        <section id="clubs">
            <h2>Available Clubs</h2>
            <div class="club">
                <h3>Photography Club</h3>
                <p>Enhance your photography skills and capture beautiful moments.</p>
            </div>
            <div class="club">
                <h3>Robotics Club</h3>
                <p>Build and program robots with like-minded enthusiasts.</p>
            </div>
            <div class="club">
                <h3>Soccer Club</h3>
                <p>A Soccer Club serves multiple purposes, catering to individuals who are passionate 
                    about soccer and wish to develop their skills, enjoy the sport, and engage with their community.</p>
            </div>
            <div class="club">
                <h3>Basketball Club</h3>
                <p>A Basketball Club serves various purposes aimed at fostering a love for the game, 
                    developing skills, promoting physical fitness, and building a sense of community.</p>
            </div>
            <div class="club">
                <h3>Math Club</h3>
                <p>A Math Club aims to foster a love for mathematics, enhance problem-solving skills, 
                    and create a supportive community for students who are passionate about math.</p>
            </div>
            <div class="club">
                <h3>Drama Club</h3>
                <p>A Drama Club provides a creative outlet for individuals 
                    passionate about theater and the performing arts.</p>
            </div>
            <div class="club">
                <h3>Programming Club</h3>
                <p>A Programming Club serves as a hub for individuals interested in
                     computer programming and software development</p>
            </div>
            <!-- Add more clubs as needed -->
        </section>
        <section id="signup">
            <h2>Sign Up to Join</h2>
            <form action="submit_form1.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="club">Select Club:</label>
                <select id="club" name="club">
                    <option value="photography">Photography Club</option>
                    <option value="robotics">Robotics Club</option>
                    <option value="Soccer Club">Soccer Club</option>
                    <option value="Basketball Club">Basketball Club</option>
                    <option value="Math Club">Math Club</option>
                    <option value="Drama Club">Drama Club</option>
                    <option value="Programming Club">Programming Club</option>

                    <!-- Add more clubs as needed -->
                </select>
                <br>
                <button type="submit">Join Now</button>
            </form>
        </section>
        <section id="contact">
            <h2>Contact Us</h2>
            <p>Email: MMUClubhub@gmail.com</p>
        </section>
    </main>
    <footer>
        <p> &copy; 2024 MMU Clubhub Connect. All Rights Reserved.</p>
    </footer>
</body>
</html>