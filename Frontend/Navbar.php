<?php
   if(!isset($_SESSION)) 
   { 
       session_start(); 
    } 
    ?>
<html>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

<head>
    <link rel="stylesheet" type="text/css" href="Navbar.css">
    </link>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-container">
            <img src="" alt="logo">
            <ul class="navbar-menu">
                <a href="Home.php">
                    <li class="navbar-item">HOME</li>
                </a>
                <a href="">
                    <li class="navbar-item">ABOUT</li>
                </a>
                <a href="Events.php">
                    <li class="navbar-item">EVENTS</li>
                </a>
            </ul>
            <?php
            if(isset($_SESSION['userName'])) {
                echo $_SESSION['userName'];
                ?>
            <!-- <a href="Home.php"> -->
            <form method="POST">
                <input type="submit" name='logout' value="LOGOUT">
            </form>
            <!-- </a> -->
            <?php
            if(isset ($_POST['logout'])){
                session_destroy();
                header("Location:Home.php");
                exit;
            }   
            }
            else{
            ?>
            <div class=" navbar-button">
                <button class="navbar-login" onclick="openpopup()">LOGIN<i class="fa-solid fa-user"></i></button>

                <button class="navbar-signup" onclick="sopenpopup()"> SIGNUP<i
                        class="fa-solid fa-user-plus"></i></button>
            </div>
            <?php
            }
            ?>
        </div>
    </nav>
    <!-- Login Popup -->
    <form action="dbuser.php" method="POST">
        <div class="navbar-popup" id="popup">
            <div class="header">
                <h4>LOGIN TO YOUR ACCOUNT</h4>
                <span onclick="closepopup()"><i class="fa-solid fa-xmark"></i></span>
            </div>
            <div class="group-sec">
                <label for="email">Email </label>
                <input type="text" name="email" id="email">
            </div>
            <div class="group-sec">
                <label for="password">Password </label>
                <input type="text" name="password" id="password">
            </div>
            <div class="popup-button">
                <button name="signin" class="navbar-login">Sign In<i class="fa-solid fa-user"></i></button>
                <!-- <span>Don't have an account?</span> -->
                <button class="navbar-signup">Sign Up<i class="fa-solid fa-user-plus"></i></button>
            </div>
        </div>
    </form>
    <script>
    let popup = document.getElementById("popup");

    function openpopup() {
        popup.classList.add("open-popup");
    }

    function closepopup() {
        popup.classList.remove("open-popup");
    }
    </script>
    <!-- Signup Popup -->
    <form action="dbuser.php" method="POST">
        <div class="navbar-popup" id="spopup">
            <div class="header">
                <h4>SIGNUP TO YOUR ACCOUNT</h4>
                <span onclick="sclosepopup()"><i class="fa-solid fa-xmark"></i></span>
            </div>
            <div class="group">
                <div class="column">
                    <label for="fname">FirstName * </label>
                    <input type="text" name="fname" id="fname">
                </div>
                <div class="column-sec">
                    <label for="lname">LastName* </label>
                    <input type="text" name="lname" id="lname">
                </div>
            </div>
            <div class="group-sec">
                <label for="email">Email* </label>
                <input type="text" name="email" id="email">
            </div>
            <div class="group">
                <div class=" column">
                    <label for="pass">Password* </label>
                    <input type="text" name="password" id="pass">
                </div>
                <div class="column-sec">
                    <label for="cpassword">ConfirmPassword </label>
                    <input type="text" name="" id="cpassword">
                </div>
            </div>
            <div class="group-sec">
                <label for="phone">Phone </label>
                <input type="text" name="phone" id=" phone">
            </div>
            <div class="popup-button">
                <button name="signup" class="navbar-signup">Sign Up<i class="fa-solid fa-user-plus"></i></button>
            </div>
        </div>
    </form>
    <script>
    let spopup = document.getElementById("spopup");

    function sopenpopup() {
        spopup.classList.add("open-popup");
    }

    function sclosepopup() {
        spopup.classList.remove("open-popup");
    }
    </script>


</html>