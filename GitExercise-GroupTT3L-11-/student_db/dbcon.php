<?php

$con = mysqli_connect("localhost","root","","users_db");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>