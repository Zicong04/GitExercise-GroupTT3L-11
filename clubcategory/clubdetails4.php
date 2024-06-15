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
    <title>Club Details</title>
    <style>
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background-image: url('sport.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}

header {
    color: #fff;
    text-align: center;
    padding: 20px 0;
    position: relative;
}

#openBtn {
    position: absolute;
    top: 10px;
    right: 10px;
    display: inline-block;
    border-radius: 80px;
    background-color: #444;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 15px;
    padding: 10px;
    width: 180px;
    transition: all 0.5s;
    cursor: pointer;
}
#openBtn span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
}
#openBtn span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
}
#openBtn:hover span {
    padding-right: 20px;
}
#openBtn:hover span:after {
    opacity: 1;
    right: 0;
}
h2 {
    margin: 5px auto;
    text-align: center;
    color: black;
    font-size: 2em;
    transition: 0.5s;
    font-family: Arial, Helvetica, sans-serif;
}
h2:hover {
    text-shadow: 0 1px 0 black, 0 2px 0 black,
        0 2px 0 black, 0 2px 0 black,
        0 2px 0 black, 0 2px 0 black,
        0 2px 0 black, 0 2px 0 black,
        0 2px 0 black, 0 2px 0 black,
        0 5px 0 black, 0 5px 0 black,
        0 20px 20px rgba(0, 0, 0, 0.5);
}
nav {
    background-color: #444;
    color: white;
    text-align: center;
    padding: 10px 0;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin: 0 10px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
}

nav ul li a:hover {
    background-color: #555;
}

main {
    padding: 20px;
    text-align: center;
}

.category-section {
    margin-bottom: 20px;
    position: relative;
}

.image-container {
    position: relative;
    height: 300px;
    overflow: hidden;
}
.popup {
    display: none;
    position: fixed;
    z-index: 1;
    left: 80%;
    top: 0;
    width: 20%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}

.popup-content {
    background-color: #555;
    margin: 10% auto;
    padding: 10px;
    border: 1px solid #888;
    width: 80%;
}

.hero-image, .hero-image-right {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('clubs.jpg');
    height: 100%;
    width: 100%;
    background-position: left;
    background-repeat: no-repeat;
    background-size: cover;
    position: absolute;
    top: 0;
    border-radius: 3%;
    transition: left 2s;
}

.hero-image-right {
    background-position: right;
}

.hero-text {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
}

.hero-text h2 {
    margin: 0;
    font-size: 2em;
}

.hero-text ul {
    list-style: none;
    padding: 0;
    text-align: left;
    display: inline-block;
}

.hero-text ul li {
    margin-bottom: 10px;
}

.hero-text button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 10px 25px;
    color: black;
    background-color: #ddd;
    text-align: center;
    cursor: pointer;
}

.hero-text button:hover {
    background-color: #555;
    color: white;
}

footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}
section ul {
    list-style: none;
    padding: 0;
}
section ul li {
    background: rgba(255, 255, 255, 0.8);
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 5px;
    transition: background-color 0.3s;
}
section ul li:hover {
    background-color: rgba(255, 255, 255, 1);
}
nav {
    color: #fff;
    text-align: center;
    padding: 10px 0;
}
nav a {
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
}
.profile-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}
.closeBtn {
    color: black;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.closeBtn:hover,
.closeBtn:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.closeBtn:focus {
    outline: none;
}
.wordopenprofile {
    color: white;
}
        .club {
            background-color: rgba(255, 255, 255, 0.8);
            margin-bottom: 1rem;
            padding: 1rem;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
            text-align: left;
        }

        .club h2 {
            margin-top: 0;
        }

        .club:hover {
            background-color: rgba(255, 255, 255, 1);
        }
        .profile-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}
.closeBtn {
    color: black;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.closeBtn:hover,
.closeBtn:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.closeBtn:focus {
    outline: none;
}
.wordopenprofile {
    color: white;
}
    </style>
</head>
<body>
    <header>
        <h1>Technology Club Details</h1>
        <button id="openBtn" class="button"><span>Previous</span></button>
        <div id="profilePopup" class="popup">
            <div class="popup-content">
                <div class="profile-header">
                    <span class="closeBtn">&times;</span>
                </div>
                <div class="wordopenprofile">
                <p> <a href="exploreclub.php">Explore Clubs</a></p>
                <p> <a href="clubcategory.php">Clubcategory</a></p>
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
            <li><a href="#club1">About us</a></li>
            <li><a href="cluba4.php">Announcement</a></li>
            <li><a href="contact1.php">Contact Information</a></li>
        </ul>
    </nav>

    <main>
        <div class="container">
            <div class="club" id="club1">
                <h3><details><p>Welcome to the Technology Club! </p>

<p>Dear Technology Club Members,</p> 
Welcome to our technology-driven community!
Whether you're a tech enthusiast, a coding wizard, or simply curious about the latest innovations, Technology Club is thrilled to have you join us. Our club is a place where we celebrate all things tech and explore the endless possibilities of the digital world together. 

At the Technology Club, we believe that technology is not just a tool but a catalyst for change and innovation. Through our club, we aim to provide a platform for members to share knowledge, collaborate on projects, and stay updated with the latest trends in technology. 

Throughout the year, we will host workshops, hackathons, and tech talks to help you expand your skills, learn new technologies, and network with industry professionals. Whether you're interested in programming, robotics, artificial intelligence, or any other tech-related field, there will be plenty of opportunities for you to dive deep into your passion and make a difference. 

We're excited to see what amazing projects and ideas you'll bring to the Technology Club. Together, let's explore the ever-evolving world of technology and push the boundaries of innovation. 

Welcome once again to Technology Club. Let's geek out and change the world, one line of code at a time! </p></details></h3>
                <p><strong>Welcome to the Technology Club Details page!</strong> 
            </div>
        </div>
    </main>

    <footer>
    <p> &copy; 2024 MMU Clubhub Connect. All Rights Reserved.</p>
    </footer>
</body>
</html>
