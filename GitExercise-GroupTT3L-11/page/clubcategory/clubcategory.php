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
    <link rel="stylesheet" href="style3.css">
    <title>Explore Clubs</title>
    <style>
    </style>
</head>
<body>
    <header>
        <h1>Club Categories</h1>
        <button id="openBtn" class="button"><span>Explore clubs</span></button>
        <div id="profilePopup" class="popup">
            <div class="popup-content">
                <div class="profile-header">
                    <span class="closeBtn">&times;</span>
                </div>
                <div class="wordopenprofile">
                <p> <a href="exploreclub.php">Explore Clubs</a></p>
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
    <nav>
        <ul>
            <a href="clubdetails.php">Sports Club</a>
            <a href="clubdetails2.php">Academic Club</a>
            <a href="clubdetails3.php">Arts Club</a>
            <a href="clubdetails4.php">Technology Club</a>
        </ul>
    </nav>
    <main>
        <div class="container">
            <div class="club" id="club1">
                <h3><details><p>Welcome to Club Categories Showcase!</p>

<p>Dear Members and Guests,</p>

 Where we highlight the diverse range of clubs available at our institution. From academic and arts to sports and technology, our clubs offer something for everyone.

At our showcase, you'll have the opportunity to learn about each club category, discover the clubs within each category, and meet the passionate individuals who make these clubs thrive. Whether you're interested in joining a club or simply curious about the club offerings, this showcase is the perfect place to explore and connect with our vibrant club community.

Each club category represents a unique set of interests and activities, providing a platform for students to pursue their passions, develop new skills, and build lasting friendships. From intellectual pursuits in academic clubs to creative expression in arts clubs, there's a club category that aligns with your interests and aspirations.

We encourage you to take this opportunity to explore the different club categories, engage with club representatives, and find your place in our diverse club community. Join us in celebrating the richness and diversity of our club ecosystem at the Club Categories Showcase.

<p>Welcome once again, and enjoy the showcase!</p>

<p>Best regards,</p>
<p>Clubhub,</p>
<p>Admin.</p>
</p></details></h3>
                <h3><strong>Welcome to the Club categories Details page!</strong></h3>
            </div>
        </div>
    </main>
    <div>
      <center>
        <title>change picture</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="ccimage1.jpg" alt="First Image">
            </div>

            <div class="item">
                <img src="ccimage2.jpg" alt="Second Image">
            </div>

            <div class="item">
                <img src="ccimage3.jpg" alt="Third Image">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
        </center>
    <footer>
    <p> &copy; 2024 MMU Clubhub Connect. All Rights Reserved.</p>
    </footer>
</body>
</html>
