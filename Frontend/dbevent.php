<?php
// Importing db connection
require 'dbcon.php';

// if button having name delete is clicked
if(isset($_POST['delete'])){
    $eid=$_POST['delete'];
    // query
    $sql="DELETE FROM eventinfo WHERE eid=$eid";
    $query_run=mysqli_query($con,$sql);
    if($query_run){
        header("Location:Home.php");
    }
    else{
        header("Location:Registerevent.php");
    }
}

// if button having name update is clicked
if(isset($_POST['update'])){
    $eid=$_POST['id'];
// Image is type of media so we use file
    $image=$_FILES['image'];

    $filename=$image['name'];
    $fileerror=$image['error'];
    $filetmo=$image['tmp_name'];
// moving the image to certain folder
    $destinationfile='upload/'.$filename;
    move_uploaded_file($filetmo,$destinationfile);
    
    $name=$_POST['name'];
    $location=$_POST['location'];
    $date=$_POST['date'];
    $description=$_POST['description'];
    $organizer=$_POST['orgname'];

    $sql="UPDATE eventinfo SET logo='$destinationfile', name='$name', location='$location',
    date='$date',description='$description',organizers='$organizer' WHERE eid=$eid";
    $query_run=mysqli_query($con,$sql);
    if($query_run){
        header("Location:Home.php");
    }
    else{
        header("Location:Registerevent.php");
    }
}

if(isset ($_POST['save'])){

    $image=$_FILES['image'];
    
    $filename=$image['name'];
    $fileerror=$image['error'];
    $filetmo=$image['tmp_name'];

    $destinationfile='upload/'.$filename;
    move_uploaded_file($filetmo,$destinationfile);



    
    $name=$_POST['name'];
    $location=$_POST['location'];
    $date=$_POST['date'];
    $description=$_POST['description'];
    $organizer=$_POST['orgname'];

$sql="insert into eventinfo(logo,name,location,date,description,organizers) values ('$destinationfile','$name','$location','$date','$description','$organizer')";
$query_run=mysqli_query($con,$sql);

if($query_run){
    header("Location:Home.php");
}
else{
    header("Location:Home.php");
}
}
?>