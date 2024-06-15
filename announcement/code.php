<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM students WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Announcement Deleted Successfully";
        header("Location: http://mmuclubhubconnect.website/announcement/indexi.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Announcement Not Deleted";
        header("Location: http://mmuclubhubconnect.website/announcement/indexi.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);

    $announcement = mysqli_real_escape_string($con, $_POST['announcement']);

    $query = "UPDATE students SET name='$name', announcement='$announcement' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Announcement Updated Successfully";
        header("Location: http://mmuclubhubconnect.website/announcement/indexi.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Announcement Not Updated";
        header("Location: http://mmuclubhubconnect.website/announcement/indexi.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $announcement = mysqli_real_escape_string($con, $_POST['announcement']);

    $query = "INSERT INTO students (name,announcement) VALUES ('$name','$announcement')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Announcement Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Announcement Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>