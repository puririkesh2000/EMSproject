<?php
   if(!isset($_SESSION)) 
   { 
       session_start(); 
    } 
    ?>
<html>

<head>
    <title>
        Project
    </title>
</head>
<!-- Importing style.css -->
<link rel="stylesheet" type="text/css" href="style.css">
</link>

<body>

    <!-- Navbar -->
    <?php
include 'navbar.php';
    ?>
    <?php
// session_start();

if(isset($_SESSION['userName'])) {
echo $_SESSION['userName'];
echo $_SESSION['last_login_timestamp'];
}
?>
    <!--Banner  -->
    <div class="Banner">
        <div class="Banner-img">
            <div class="Banner-Overlay">
                <!-- <img src="../Images/Opportunity.jpg" alt="img"> -->
                <div class="Banner-content">
                    <h4>Find your next <span style="color:Orange">Opportunity</span>
                        <p>Music,Exhibition & IT Fair</p>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="Boxarea">
        <div class="Content_Boxarea">
            <h4>EventSeeker</h4>
            <a href="Events.php" class="a_Boxarea">Search Now</a>
            <h3 class="h3_Boxarea">Looking For a Event?</h3>

        </div>
        <div class="Content_Boxarea">
            <h4>Register</h4>
            <a href="Registerevent.php" class="a_Boxarea">Register Now</a>
            <h3 class="h3_Boxarea">Are you Registrating?</h3>

        </div>
    </div>
    <?php
    

    include 'events.php';
    // session_destroy();
    // include 'Registerevent.php';
    ?>










</body>

</html>