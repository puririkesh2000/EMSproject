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
                <li class="navbar-item">HOME</li>
                <li class="navbar-item">ABOUT</li>
                <li class="navbar-item">EVENTS</li>
            </ul>
            <div class="navbar-button">
                <button class="navbar-login" onclick="openpopup()">LOGIN</button>

                <button class="navbar-signup" onclick="openpopup()"> SIGNUP</button>
            </div>
        </div>
    </nav>
    <!-- Login Popup -->
    <form action="">
        <div class="navbar-popup" id="popup">
            <div class="credential">
                <h4>LOGIN TO YOUR ACCOUNT</h4>
                <span onclick="closepopup()"><i class="fa-solid fa-xmark"></i></span>
            </div>
            <label for="email">Name </label>
            <input type="text" id="email">
            <label for="password">Password </label>
            <input type="text" name="" id="password">
            <div class="popup-button">
                <button>Sign In</button>
                <span>Don't have an account?</span>
                <button>Sign Up</button>
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
    <form action="">
        <div class="navbar-popup" id="popup">
            <div class="credential">
                <h4>SIGNUP TO YOUR ACCOUNT</h4>
                <span onclick="closepopup()"><i class="fa-solid fa-xmark"></i></span>
            </div>
            <label for="email">Name </label>
            <input type="text" id="email">
            <label for="password">Password </label>
            <input type="text" name="" id="password">
            <div class="popup-button">
                <button>Sign In</button>
                <span>Don't have an account?</span>
                <button>Sign Up</button>
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

</html>