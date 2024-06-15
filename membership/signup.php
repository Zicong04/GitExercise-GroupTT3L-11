<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	} else if(empty($pass)) {
        header("Location: index.php?error=Password is required");
	    exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_name='$uname'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			header("Location: index.php?error=User already exists");
	        exit();
		} else {
			// Insert new user into the database
			$insert_sql = "INSERT INTO users (user_name, password) VALUES ('$uname', '$pass')";
			if (mysqli_query($conn, $insert_sql)) {
				// Set session variables
            	$_SESSION['user_name'] = $uname;
            	$_SESSION['id'] = mysqli_insert_id($conn);
            	header("Location: home.php");
		        exit();
			} else {
				header("Location: index.php?error=Sign-up failed");
		        exit();
			}
		}
	}
} else {
	header("Location: index.php");
	exit();
}
?>
