<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Individual Step 1/4</title>
    <link rel="stylesheet" href="individualPg1Style.css">
    <script src="https://kit.fontawesome.com/03a159b6a0.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="navbar">
    <div class="leftNavbar">
    <a href="../index.php"><img class="logo" src="../icons/TapNetworkBlack.svg"></a>
    <p class="logoText"> <a href="../index.php" style="color: rgba(24, 25, 31, 1); text-decoration:none; "> <span style="color: rgba(47, 128, 237, 1);;">Tap</span>Network</a></p>
    </div>
    <div class="rightNavbar">
        
       <a href="signUpPg1.html">
        <div class="left-rightNavbar">
            <i class="fas fa-chevron-left"></i>
            <span class="back">Back</span>
        
        </div>

       </a> 
        
        <div class="right-rightNavbar">
            <span class="step">STEP 01/04</span>
            <span class="step-topic">Personal Info</span>

        </div>
    </div>
</div>

<div class="content">
    <div class="leftContent">
        <img src="images/Individual Step1.png" alt="">
    </div>

    <div class="rightContent">
        <div class="rightAllContent">
            <div class="rightAllContentHeading">
                <h1>Register Individual Account!</h1>

            
            </div>
            
            <div class="signUpPt1">
                <form action="../includes/individualPg1.inc.php" id="form" method="post">
                    <div class="formControl ">
                        <label for="fullName">Your Full Name*</label><br>
                        <input id="fullName" type="text" placeholder="Full Name" name="name">
                        <i class="fas fa-exclamation-circle"></i>
                        <i class="fas fa-check-circle"></i>
                        <small>Error Message</small>
            
                    </div>
            
                    <div class=" formControl ">
                        <label for="email">Email Address*</label><br>
                        <input id="email" type="text" placeholder="Enter Email Address" name="email">
                        <i class="fas fa-exclamation-circle"></i>
                        <i class="fas fa-check-circle"></i>
                        <small>Error Message</small>
            
                    </div>
                    <div class="formControl">
                        <label for="pwd">Create Password*</label><br>
                        <input id="password" type="password" placeholder="Password" name="pwd">
                        <i class="fas fa-exclamation-circle"></i>
                        <i class="fas fa-check-circle"></i>
                        <small>Error Message</small>
            
                    </div>
                    <div class=" formControl">
                        <label for="pwdrepeat">Retype Password*</label><br>
                        <input id="password2" type="password" placeholder="Retype Password" name="pwdrepeat">
                        <i class="fas fa-exclamation-circle"></i>
                        <i class="fas fa-check-circle"></i>
                        <small>Error Message</small>
            
                    </div>
                    
                    <div class="TnC">
                        <input onclick="TnCTrigger()" type="checkbox" id="agreeTnC" name="agreeTnC" value="true">
                        <label id="TnCLabel" for="agreeTnC"> I agree to terms & conditions</label><br>

                    </div>
                    
            
                    <input class="register" type="submit" name="submit" value="Register Account" />
                    <h2><span>Or</span></h2>

                    <div class="googleReg">
                        <button class="register google" type="submit"> Register with Google</button>
                        <img class="googleIcon" src="../icons/Mini_Icon/google icon.png" alt="">

                    </div>

                </form>
            
            </div>

        </div>
        
        
        
    </div>

</div>
    
    
</div>
<!-- <script src="signUpValidationCheck.js"></script> -->

<?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all feilds!</p>";
        } else if ($_GET["error"] == "invalidemail"){
            echo "<p> Choose proper Email!</p>";
        }  else if ($_GET["error"] == "passwordsdontmatch"){
            echo "<p>Passwords didnot match!</p>";
        } else if ($_GET["error"] == "none"){
            header("location: individualPg2.php");
            exit();
        } 
    }
?>

</body>

</html>