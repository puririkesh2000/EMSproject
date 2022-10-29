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

<body > 
    <nav class="navbar" id='navbar' >
        <div class="navbar-container">
            <img src="" alt="logo">
            <ul class="navbar-menu">
                <a href="Home.php" style="text-decoration: none;">
                    <li class="navbar-item">HOME</li>
                </a>
                <a href="" style="text-decoration: none;">
                    <li class="navbar-item">ABOUT</li>
                </a>
                <a href="Events.php" style="text-decoration: none;">
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
                    document.getElementById("navbar").style.height = "70px";
                    // document.getElementById("navbar").classList.add("add-shadow");

                } else {
                    document.getElementById("navbar").style.height = "80px";
                    // document.getElementById("logo").style.fontSize = "35px";
                }

            }
            </script>

            <?php
            if(isset($_SESSION['userName'])) {
                echo "<p class='username'> <i class='fa-solid fa-user'></i>".$_SESSION['userName']."</p>";
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
                <button class="navbar-log" onclick="openpopup()">LOGIN<i class="fa-solid fa-user"></i></button>

                <button class="navbar-signup" onclick="sopenpopup()"> SIGNUP<i
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
            <h4>LOGIN TO YOUR ACCOUNT</h4>
            <span onclick="closepopup()"><i class="fa-solid fa-xmark"></i></span>
        </div>
        <form action="dbuser.php" method="POST">
            <div class="group-sec">
                <label for="email">Email </label>
                <input type="text" name="email" id="email">
            </div>
            <div class="group-sec">
                <label for="password">Password </label>
                <input type="text" name="password" id="password">
            </div>
            <div class="popup-button">
                <button name="signin" class="navbar-log">Sign In<i class="fa-solid fa-user"></i></button>
                <!-- <span>Don't have an account?</span> -->

            </div>
        </form>
        <div class="button-signup">
            <h4>Don't have an account? </h4>
            <button class="navbar-signup" onclick="sopenpopup()">Sign Up
                <i class="fa-solid fa-user-plus"></i></button>
        </div>
    </div>
    <script>
    let popup = document.getElementById("popup");

    function openpopup() {
        document.body.style.backgroundColor = "black";
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
            <h4>SIGNUP TO YOUR ACCOUNT</h4>
            <span onclick="sclosepopup()"><i class="fa-solid fa-xmark"></i></span>
        </div>
        <form action="dbuser.php" method="POST">
            <div class="group">
                <div class="column">
                    <label for="fname">FirstName * </label>
                    <input type="text" name="fname" id="fname">
                </div>
                <i class="fa-sharp fa-solid fa-user-pen" id="icon1"></i>
                <div class="column-sec">
                    <label for="lname">LastName* </label>
                    <input type="text" name="lname" id="lname">
                </div>
                <i class="fa-sharp fa-solid fa-user-pen" id="icon2"></i>
            </div>
            <div class="group-sec">
                <label for="email">Email*<i class="fa-solid fa-envelope" id='icon3'></i> </label>
                <input type="text" name="email" id="email">
            </div>

            <div class="group">
                <div class=" column">
                    <label for="pass">Password*<i class="fa-solid fa-lock"></i></label>
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
        </form>
        <div class="button-signup">
            <h4>Already have an account?</h4>
            <button name="signin" onclick="openpopup()" class="navbar-log">Sign In<i class="fa-solid fa-user"></i></button>

        </div>
    </div>
    <script>
    let spopup = document.getElementById("spopup");

    function sopenpopup() {
        document.body.style.backgroundColor = "black";

        spopup.classList.add("open-popup");
    }

    function sclosepopup() {
        document.body.style.backgroundColor = "white";

        spopup.classList.remove("open-popup");
    }
    </script>

</body>
</html>