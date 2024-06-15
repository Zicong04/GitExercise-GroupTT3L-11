<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM studentss WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Club Deleted Successfully";
        header("Location: http://mmuclubhubconnect.website/club/indexi.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Club Not Deleted";
        header("Location: http://mmuclubhubconnect.website/club/indexi.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);

    $club = mysqli_real_escape_string($con, $_POST['club']);

    $query = "UPDATE studentss SET name='$name', club='$club' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Club Updated Successfully";
        header("Location: http://mmuclubhubconnect.website/club/indexi.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Club Not Updated";
        header("Location: http://mmuclubhubconnect.website/club/indexi.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $club = mysqli_real_escape_string($con, $_POST['club']);

    $query = "INSERT INTO studentss (name,club) VALUES ('$name','$club')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Club Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Club Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>