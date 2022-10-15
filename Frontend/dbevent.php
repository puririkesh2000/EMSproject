<?php
require 'dbcon.php';

if(isset ($_POST['save'])){
    $name=$_POST['name'];
    $location=$_POST['location'];
    $date=$_POST['date'];
    $description=$_POST['description'];
    $organizer=$_POST['orgname'];
}
$sql="insert into eventinfo(name,location,date,description,organizers) values ('$name','$location','$date','$description','$organizer')";
$query_run=mysqli_query($con,$sql);
if($query_run){
    header("Location:Home.php");
}
?>