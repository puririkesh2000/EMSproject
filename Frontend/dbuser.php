<?php
// Importing db connection

// session_start();



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
    echo "Already exits";
    
    }
    elseif($password != $cpassword){
        echo "passwords doesn't match";
   }
    else{
    if (!preg_match ("/^[a-zA-z]*$/", $fname) ) {  
        $ErrMsg1 = "Only alphabets and whitespace are allowed.";  
                 echo $ErrMsg1;  
    }
    elseif (!preg_match ("/^[a-zA-z]*$/", $fname) ) {  
        $ErrMsg2= "Only alphabets and whitespace are allowed.";  
                 echo $ErrMsg2;  
    }
    elseif (!preg_match ("/^[0-9]*$/", $phone) ){  
        $ErrMsg3 = "Only numeric value is allowed.";  
        echo $ErrMsg3;
    }
    elseif (strlen($phone)<10 || strlen($phone)>10) {  
        $ErrMsg = "Mobile must have 10 digits.";  
                echo $ErrMsg;  
    }
    elseif (!preg_match ($pattern, $email) ){  
    $ErrMsg = "Email is not valid.";  
            echo $ErrMsg;  
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