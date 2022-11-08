<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
  } 
// include 'Navbar.php';
?>
<html>


<head>
    <link rel="stylesheet" type="text/css" href="Error.css">

</head>

<body>


    <div class="error-container" onclick="sclosepopup(); closepopup()">
        <div class="error-img">
        </div>
        <div class="error-content">

            
            <h3><?php
        if(isset( $_SESSION['msg'])){
            
            echo $_SESSION['msg'];
        } ?></h3>
        <h1>ERROR!!!</h1>
            <h3  class="error-h3">Please Signin</h3>

        </div>
    </div>
    <button class="navbar-log" onclick=" openpopup()" style="margin-left:695px">LOGIN<i
            class="fa-solid fa-user"></i></button>
</body>

</html>