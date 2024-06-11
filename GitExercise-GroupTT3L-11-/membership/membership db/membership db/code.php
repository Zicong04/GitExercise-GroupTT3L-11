<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_memberships']))
{
    $memberships_id = mysqli_real_escape_string($con, $_POST['delete_memberships']);

    $query = "DELETE FROM memberships WHERE id='$memberships_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_memberships']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['memberships_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "UPDATE memberships SET name='$name', id='$id', password='$password', WHERE id='$memberships_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_memberships']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "INSERT INTO memberships (name,id,password,usertype) VALUES ('$name','$id','$password')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: memberships-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: memberships-create.php");
        exit(0);
    }
}

?>