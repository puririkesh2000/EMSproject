<?php
// Connecting to database
$con = mysqli_connect("localhost","root","","ems");
 if(!$con){
    die("Connection failed" . mysqli_connect_error());
 }
?>