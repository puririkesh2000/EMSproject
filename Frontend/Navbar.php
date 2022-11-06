<?php 
   if(!isset($_SESSION)) 
   { 
       session_start(); 
    } 
    require 'dbuser.php';
    ?>
<html>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

<head>
    <link rel="stylesheet" type="text/css" href="Navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar" id='navbar'>
        <div class="navbar-container">
            <img src="../Images/logo2.jpg" alt="logo" width=100 height=40>
            <ul class="navbar-menu">
                <a href="Home.php" style="text-decoration: none;">
                    <li class="navbar-item">HOME</li>
                </a>
                <a href="" style="text-decoration: none;">
                    <li class="navbar-item">ABOUT</li>
                </a>
                <a href="Search.php" style="text-decoration: none;">
                    <li class="navbar-item">EVENTS</li>
                </a>
            </ul>

            <script>
            // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                    document.getElementById("navbar").style.height = "60px";
                    // document.getElementById("navbar").classList.add("add-shadow");

                } else {
                    document.getElementById("navbar").style.height = "80px";
                    // document.getElementById("logo").style.fontSize = "35px";
                }

            }
            </script>

            <?php
            if(isset($_SESSION['userName'])) {
                echo "<p class='username'> <i class='fa-solid fa-user' style='margin-right:5px''></i>" . $_SESSION['userName']."</p>";
                ?>
            <!-- <a href="Home.php"> -->
            <form method="POST">
                <button name='logout' value="LOGOUT" class="navbar-log">LOGOUT<i
                        class="fa-solid fa-user-minus"></i></button>
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
                <button class="navbar-log" onclick=" sclosepopup();openpopup()">LOGIN<i
                        class="fa-solid fa-user"></i></button>

                <button class="navbar-signup" onclick="closepopup();sopenpopup()"> SIGNUP<i
                        class="fa-solid fa-user-plus"></i></button>
            </div>
            <?php
            }
            ?>
        </div>
    </nav>
    <!-- Login Popup -->
    <div class="navbar-popup" id="popup">
        <div class="header">
            <h2>LOGIN TO YOUR ACCOUNT</h2>
            <span onclick="closepopup()"><i class="fa-solid fa-xmark"></i></span>
        </div>
        <form action="dbuser.php" method="POST">
            <div class="group-sec">
                <label for="email">Email </label>
                <div class="input-icon">
                    <input type="text" name="email" id="email" placeholder="Email Address">
                    <i class="fa-solid fa-envelope"></i>
                </div>
            </div>
            <div class="group-sec">
                <label for="password">Password </label>
                <div class="input-icon">
                    <input type="password" name="password" id="password" placeholder="Password">
                    <i class="fa-solid fa-lock"></i>
                </div>
            </div>
            <div class="popup-button">
                <button name="signin" class="navbar-log">Sign In<i class="fa-solid fa-user"></i></button>
                <!-- <span>Don't have an account?</span> -->

            </div>
        </form>
        <div class="button-signup">
            <h4>Don't have an account? </h4>
            <button class="navbar-signup" onclick="closepopup();sopenpopup()">Sign Up
                <i class="fa-solid fa-user-plus"></i></button>
        </div>
    </div>
    <script>
    let popup = document.getElementById("popup");

    function openpopup() {
        document.body.style.backgroundColor = "rgba(91, 142, 218, 0.204)";
        popup.classList.add("open-popup");
    }

    function closepopup() {
        document.body.style.backgroundColor = "white";

        popup.classList.remove("open-popup");
    }
    </script>
    <!-- Signup Popup -->
    <div class="navbar-popup" id="spopup">
        <div class="header">
            <h2>SIGNUP TO YOUR ACCOUNT</h2>
            <span onclick="sclosepopup()"><i class="fa-solid fa-xmark"></i></span>
        </div>
        <form action="dbuser.php" method="POST">
            <div class="group">
                <div class="column">
                    <label for="fname">First Name* </label>
                    <div class="input-icon">
                        <input type="text" name="fname" id="fname" placeholder="Enter First Name" required>
                        <i class="fa-sharp fa-solid fa-user-pen"></i>
                    </div>
                </div>
                <div class="column-sec">
                    <label for="lname">Last Name* </label>
                    <div class="input-icon">
                        <input type="text" name="lname" id="lname" placeholder="Enter Last Name" required>
                        <i class="fa-sharp fa-solid fa-user-pen"></i>
                    </div>
                </div>
            </div>
            <div class="group-sec">
                <label for="email">Email* </label>
                <div class="input-icon">
                    <input type="text" name="email" id="email" placeholder="Enter Email" required>
                    <i class="fa-solid fa-envelope"></i>
                </div>
            </div>

            <div class="group">
                <div class=" column">
                    <label for="pass">Password*</label>
                    <div class="input-icon">
                        <input type="password" name="password" id="pass" placeholder="Enter Password" required>
                        <i class="fa-solid fa-lock"></i>
                    </div>
                </div>
                <div class="column-sec">
                    <label for="cpassword">Confirm Password* </label>
                    <div class="input-icon">
                        <input type="password" name="cpassword" id="cpassword" placeholder="Enter Confirm Password"
                            required>
                        <i class="fa-solid fa-lock"></i>
                    </div>
                </div>
            </div>
            <div class="group-sec">
                <label for="phone">Phone*</label>
                <div class="input-icon">
                    <input type="text" name="phone" id=" phone" placeholder="Enter Phone" required>
                    <i class="fa-solid fa-phone"></i>
                </div>
            </div>

            <div class="popup-button">
                <button name="signup" class="navbar-signup">Sign Up<i class="fa-solid fa-user-plus"></i></button>
            </div>
        </form>
        <div class="button-signup">
            <h4>Already have an account?</h4>
            <button name="signin" onclick="sclosepopup();openpopup()" class="navbar-log">Sign In<i
                    class="fa-solid fa-user"></i></button>

        </div>
    </div>
    <script>
    let spopup = document.getElementById("spopup");

    function sopenpopup() {
        document.body.style.backgroundColor = "rgba(91, 142, 218, 0.204)";

        spopup.classList.add("open-popup");
    }

    function sclosepopup() {
        document.body.style.backgroundColor = "white";

        spopup.classList.remove("open-popup");
    }
    </script>

</body>

</html>