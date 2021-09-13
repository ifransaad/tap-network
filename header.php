<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TapNetwork - Future of Networking</title>

    <link rel="shortcut icon" type="image/jpg" href="icons/favicon.svg" />
    <link rel="stylesheet" href="css/indexNewStyle.css">
    <link rel="stylesheet" href="css/aboutUsStyle.css">
    <link rel="stylesheet" href="css/LoginStyle.css">
    <link rel="stylesheet" media="(max-width: 480px)" href="css/sec2AnimationSliderResponsiveStyle.css">
    <!-- <link rel="stylesheet" href="signUp/css/signUpPgStyle.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/03a159b6a0.js" crossorigin="anonymous"></script>
    <script src="js/countUp.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>

</head>

<body>
    <!-- Navbar -->
    <div class="wholeNavbar" id="myHeader">
        <div class="navbar ">
            <div class="navbarContent">
                <div class="">
                    <a href="index.php"><img class="logo" src="icons/tapWorking.svg"></a>
                </div>

                <div class="nav hidden ">
                    <!-- <li><a class="list" href="index.php">Home</a></li> -->
                    <!-- <li><a class="list" href="#">Products</a></li> -->
                    <li><a class="list" href="aboutUs.php">About Us</a></li>
                    <li><a class="list" href="https://learn.tapnetwork.app/">Learn</a></li>

                </div>

                <div class=" hidden ">
                    <button onclick="document.location='waitlistLogin.php'" class="login">Login</button>
                    <button onclick="document.location='waitlistRegister.php' " class="navSignup"> Claim a free card!</button>
                </div>

                <div class="responsiveBar">
                    <div class="responsiveBarLine">

                    </div>
                </div>
            </div>

        </div>

        <div class="navBarResponsive ">
            <!-- <li><a class="list" href="index.php" style=" color:rgba(47, 128, 237, 1) ;">Home</a></li> -->
            <!-- <li><a class="list" href="#">Products</a></li> -->
            <li><a class="list" href="aboutUs.php">About Us</a></li>
            <li><a class="list" href="https://learn.tapnetwork.app/">Learn</a></li>
            <button onclick="document.location='waitlistLogin.php'" class="login" style="color: rgba(47, 128, 237, 1);">Login</button>
            <button onclick="document.location='waitlistRegister.php' " class="navSignup"> Get your free card!</button>


        </div>

    </div>

    <!-- Navbar End -->

    <?php
    include 'login/login.php';
    ?>



    <script>
        // function disableActivate() {
        //     document.querySelectorAll(".wrapper")[0].classList.remove("activate");
        //     document.querySelectorAll(".blackBox")[0].classList.remove("activate");


        // }

        // function enableActivate() {
        //     document.querySelectorAll(".wrapper")[0].classList.add("activate");
        //     document.querySelectorAll(".blackBox")[0].classList.add("activate");


        // }
    </script>




    <!-- Login Box End -->