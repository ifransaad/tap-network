<?php 

    include 'includes/dbh.inc.php';


    $refer = htmlspecialchars($_GET['refer'] ?? '');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Our Waitlist</title>
    <link rel="shortcut icon" type="image/jpg" href="icons/favicon.svg" />
    <link rel="stylesheet" href="css/waitlistRegister.css">
    <link rel="stylesheet" href="css/intlTelInput.css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/03a159b6a0.js" crossorigin="anonymous"></script>
    
    <script>
    function checkemailAvailability() {
    $("#loaderIcon").show();
    jQuery.ajax({
    url: "checkAvailability.php",
    data:'email='+$("#email").val(),
    type: "POST",
    success:function(data){
    $("#email-availability-status").html(data);
    $("#loaderIcon").hide();
    },
    error:function (){}
    });
    }
    </script>

</head>

<body>
    <div class="waitListRegisterContainer">


        <div class="content">
            <div class="leftContent">
                <div class="navbar">
                    <div class="leftNavbar">
                        <a href="index.php"><img class="logo" style="width: 200px;" src="icons/Logolatest.svg"></a>
                    </div>
                </div>
                <img class="leftImg" src="signUp/images/Individual Step1.png" alt="">
            </div>
            <div class="rightContent">

                <div class="rightAllContent">
                    <div class="navbar mobileOnly">
                        <div class="leftNavbar">
                            <a href="index.php"><img class="logo" style="width: 200px;" src="icons/Logolatest.svg"></a>
                        </div>
                    </div>
                    <div class="rightAllContentHeading">
                        <h1>Register for an invitation!</h1>
                        <p style="font-weight: 500;">An email will be sent to you for you to register <br>
                            an account once we are up and running.</p>
                    </div>

                    <div class="signUpPt1">
                        <form action="includes/status.inc.php" id="form" class="form" method="post">
                            <div class="formControl" style="font-weight: 600;">
                                <label for="fullName" style="font-weight: 500;">Your Full Name*</label><br>
                                <input id="fullName" type="text" placeholder="Full Name" name="name">
                                <i class="fas fa-exclamation-circle"></i>
                                <i class="fas fa-check-circle"></i>
                                <small>Error Message</small>
                            </div>

                            <div class="formControl ">
                                <label for="email" style="font-weight: 500;">Email Address*</label><br>
                                <input id="email" type="text" placeholder="Enter Email Address" name="email" onBlur="checkemailAvailability()">
                                <span id="email-availability-status"></span>
                                <i class="fas fa-exclamation-circle"></i>
                                <i class="fas fa-check-circle"></i>
                                <small>Error Message</small>
                            </div>

                        

                            

                            <input class="register" type="submit" name="submit" value="Join our waitlist" />

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="signUp/js/intlTelInput.min.js"></script>
    <script src="signUp/js/telephone.js"></script>
    <script src="js/waitListValidation.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

</body>

</html>