<?php
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
    <title>Announcements</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-image: url('aa.jpg');
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

        .announcement-container {
            padding: 2rem;
        }

        .announcement {
            background-color: rgba(255, 255, 255, 0.8);
            margin-bottom: 1rem;
            padding: 1rem;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        .announcement h2 {
            margin-top: 0;
        }

        .announcement:hover {
            background-color: rgba(255, 255, 255, 1);
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
        <h1>Latest Announcements</h1>
        <button id="openBtn" class="button"><span>Previous</span></button>
        <div id="profilePopup" class="popup">
            <div class="popup-content">
                <div class="profile-header">
                    <span class="closeBtn">&times;</span>
                </div>
                <div class="wordopenprofile">
                <p> <a href="userhome.php">Home</a></p>
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
            <li><a href="#announcement2">Upcoming Events</a></li>
            <li><a href="update.php">Changes or Updates</a></li>
            <li><a href="#announcement3">Important News</a></li>
        </ul>
    </nav>

    <main>
        <div class="announcement-container">
            <div class="announcement" id="announcement1">
                <h2>Sport Club:</h2>
                <p><strong>Event:</strong> Annual Sports Day</p>
                <p><strong>Date:</strong> Saturday, June 15, 2024</p>
                <p><strong>Time:</strong> 9:00 AM - 5:00 PM</p>
                <p><strong>Description:</strong></p>
                <p>Join us for a day of friendly competition and sportsmanship as our club members showcase their skills in various sports. Open to all club members and sports enthusiasts!</p>
            </div>

            <div class="announcement" id="announcement2">
            <h2>Academic Club:</h2>
                <p><strong>Event:</strong> Guest Lecture by Dr. Jane Smith on "The Future of Artificial Intelligence"</p>
                <p><strong>Date:</strong> Thursday, June 20, 2024</p>
                <p><strong>Time:</strong> 2:00 PM - 4:00 PM</p>
                <p><strong>Description:</strong></p>
                <p>Don't miss this insightful lecture by Dr. Jane Smith, a renowned expert in AI, 
                    as she discusses the latest advancements and future trends in artificial intelligence.
                     Open to all students and faculty members interested in AI.</p>
            </div>

            <div class="announcement" id="announcement3">
            <h2>Technology Club:</h2>
                <p><strong>Event:</strong> Tech Expo 2024</p>
                <p><strong>Date:</strong> Friday, June 28, 2024</p>
                <p><strong>Time:</strong>  10:00 AM - 6:00 PM</p>
                <p><strong>Description:</strong></p>
                <p> Explore the latest innovations in technology at our annual Tech Expo! Featuring demos, 
                    presentations, and hands-on workshops on robotics, coding, 
                    AI, and more. Open to all tech enthusiasts and students interested in tech.</p>
            </div>
            <!-- Add more announcements as needed -->
        </div>
    </main>

    <footer>
   <p>&copy; 2024 MMU Clubhub Connect. All Rights Reserved.</p>
    </footer>
</body>
</html>
