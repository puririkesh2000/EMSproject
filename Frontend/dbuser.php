<?php
// Importing db connection

if(!isset($_SESSION)) 
{ 
    session_start(); 
 } 



require 'dbcon.php';

// user registration

if (isset($_POST['signup'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $phone=$_POST['phone'];
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
  
    $ss="select*from usertable where email='$email' ";
    $sresult=mysqli_query($con,$ss);
    $snum=mysqli_num_rows($sresult);
    if($snum==1){
    $_SESSION['msg']= " Email Already exits";
    header("Location:Registerevent.php");
    
    }
    elseif($password != $cpassword){
        $_SESSION['msg']= "Passwords doesn't match";
        header("Location:Registerevent.php");

   }
    else{
    if (!preg_match ("/^[a-zA-z]*$/", $fname) ) {  
        $_SESSION['msg'] = "Only alphabets and whitespace are allowed in name.";  
                 header("Location:Registerevent.php");

    }
    elseif (!preg_match ("/^[a-zA-z]*$/", $fname) ) {  
        $_SESSION['msg']= "Only alphabets and whitespace are allowed in name.";  
                 header("Location:Registerevent.php");

    }
    elseif (!preg_match ("/^[0-9]*$/", $phone) ){  
        $_SESSION['msg'] = "Only numeric value is allowed in phone number.";  
        header("Location:Registerevent.php");

    }
    elseif (strlen($phone)<10 || strlen($phone)>10) {  
        $_SESSION['msg'] = "Mobile number must have 10 digits.";  
                header("Location:Registerevent.php");
 
    }
    elseif (!preg_match ($pattern, $email) ){  
        $_SESSION['msg'] = "Email is not valid.";  
            header("Location:Registerevent.php");

    }
    else{
    
    $sql="INSERT INTO usertable(firstname,lastname,email,password,phone) values
('$fname','$lname','$email','$password','$phone')";
$query_run=mysqli_query($con,$sql);

if($query_run){
    header("Location:Home.php");
}
else{
    header("Location:Registerevent.php");
}
}}
}
// user login

if (isset($_POST['signin'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $s="SELECT * FROM usertable where email='$email' && password='$password'";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);
    
    if($num==1){
        $_SESSION['userName'] = $email;
        $_SESSION['last_login_timestamp']=time();

        header('Location:Home.php');
    }
else{
    $_SESSION['msg'] = "Invalid Email or password ."; 
header("Location:Registerevent.php");
}
}
?>