<?php
// Importing db connection
session_start();

require 'dbcon.php';

// if button having name delete is clicked
if(isset($_POST['delete'])){
    $eid=$_POST['delete'];
    // query
    $sql="DELETE eventinfo,eventdetail FROM eventinfo
    INNER JOIN eventdetail
    ON eventinfo.eid=eventdetail.eid
    WHERE eventinfo.eid=$eid;";
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
    $description=mysqli_real_escape_string($con,$_POST['description']);
    $organizer=$_POST['orgname'];

    $time=$_POST['time'];
    $capacity=$_POST['capacity'];
    $price=$_POST['price'];

    $s="UPDATE eventdetail SET time='$time', capacity='$capacity' ,price='$price'  WHERE eid=$eid";
    $query=mysqli_query($con,$s);
    if($query){
        header("Location:Home.php");  
    }
    
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
    // print_r($image);
    $filename=$image['name'];
    // echo $filename;
    $fileerror=$image['error'];
    $filetmo=$image['tmp_name'];
    $filesize=$image['size'];
    $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

// echo $filesize;
    if ($filesize> 2000000) {
        $_SESSION['error']= "Sorry, your file size exceeds 2MB.";
        header("Location:Registerevent.php");

}
// Allow certain file formats
elseif($imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "jpg" ) {
    $_SESSION['error']= "Sorry, only JPG, JPEG & PNG  files are allowed.";
    header("Location:Registerevent.php");

}
else{
$destinationfile='upload/'.$filename;
move_uploaded_file($filetmo,$destinationfile);




$name=$_POST['name'];
$_SESSION['eName'] = $name;

$location=$_POST['location'];
$date=$_POST['date'];
$description= mysqli_real_escape_string($con,$_POST['description']);
$organizer=$_POST['orgname'];
$time=$_POST['time'];
$capacity=$_POST['capacity'];
$price=$_POST['price'];

$sql="insert into eventdetail(time,capacity,price) values ('$time','$capacity','$price')";
$query_run=mysqli_query($con,$sql);

$s="insert into eventinfo(logo,name,location,date,description,organizers) values
('$destinationfile','$name','$location','$date','$description','$organizer')";
$query=mysqli_query($con,$s);

if($query){
header("Location:Home.php");
}
if($query_run){
// header("Location:Home.php");
}
else{
header("Location:Registerevent.php");
}
}
}

?>