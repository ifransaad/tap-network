
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TapNetwork- Future of Networking</title>
    <link rel="shortcut icon" type="image/jpg" href="icons/favicon.svg" />
    <link rel="stylesheet" href="css/waitlistRegister.css">
    <link rel="stylesheet" href="css/intlTelInput.css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/03a159b6a0.js" crossorigin="anonymous"></script>

</head>

<body>
    <main>
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
                        <h1>Welcome to TapNetwork</h1>
                        <p style="font-weight: 500;"></p>
                    </div>

                    <div class="signUpPt1">
                        <form action="includes/status.inc.php" id="form" class="form" method="post">
                            
                            <div class=" formControl ">
                                <label for="email" style="font-weight: 500;">Email Address*</label><br>
                                <input id="email" type="text" placeholder="Email Address" name="email">
                                <span id="email-availability-status"></span>
                                <i class="fas fa-exclamation-circle"></i>
                                <i class="fas fa-check-circle"></i>
                                <small>Error Message</small>
                            </div>

                            <div class="formControl">
                            <label for="pwd">Password*</label><br>
                            <input id="password" type="password" placeholder="Password" name="pwd">
                            <i class="fas fa-exclamation-circle"></i>
                            <i class="fas fa-check-circle"></i>
                            <small>Error Message</small>
            
                            </div>

                            <input class="register" type="submit" name="submit" value="Check your status" />

                        </form>
                        <?php 
                            if(isset($_GET["newpwd"])){
                                if ($_GET["newpwd"] = "passwordupdated"){
                                    echo "<p> Your password has been updated</p>";
                                }
                            }
                        ?>

                        <a href="reset-password.php">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </main>

    <script src="signUp/js/intlTelInput.min.js"></script>
    <script src="signUp/js/telephone.js"></script>
    <script src="js/waitListValidation.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

</body>

</html>