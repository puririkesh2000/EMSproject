<?php
// Importing db connection

session_start();



require 'dbcon.php';

// user registration

if (isset($_POST['signup'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    
    $sql="INSERT INTO usertable(firstname,lastname,email,password,phone) values
('$fname','$lname','$email','$password','$phone')";
$query_run=mysqli_query($con,$sql);

if($query_run){
    header("Location:Home.php");
}
else{
    header("Location:Registerevent.php");
}
}

// user login

if (isset($_POST['signin'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $s="select*from usertable where email='$email' && password='$password'";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);
    
    if($num==1){
        $_SESSION['userName'] = $email;
        $_SESSION['last_login_timestamp']=time();

        header('location:home.php');
    }
else{
header("Location:Registerevent.php");
}
}
?>