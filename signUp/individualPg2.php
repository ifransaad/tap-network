<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Individual Step 2/4</title>
    <link rel="stylesheet" href="individualPg1Style.css">
    <script src="https://kit.fontawesome.com/03a159b6a0.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="navbar">
        <div class="leftNavbar">
            <a href="../index.php"><img class="logo" src="../icons/TapNetworkBlack.svg"></a>
            <p class="logoText"> <a href="../index.php" style="color: rgba(24, 25, 31, 1); text-decoration:none; "> <span
                        style="color: rgba(47, 128, 237, 1);;">Tap</span>Network</a></p>
        </div>
        <div class="rightNavbar">

            <a href="individualPg1.html">
                <div class="left-rightNavbar">
                    <i class="fas fa-chevron-left"></i>
                    <span class="back">Back</span>

                </div>

            </a>

            <div class="right-rightNavbar">
                <span class="step">STEP 02/04</span>
                <span class="step-topic">Username</span>

            </div>
        </div>
    </div>

    <div class="content">
        <div class="leftContent">
            <img src="images/individual step2.png" alt="">
        </div>

        <div class="rightContent">
            <div class="rightAllContent">
                <div class="rightAllContentHeading">
                    <h1>Build Your Profile!</h1>
                    <p>Lets start constructing your Tap profile.</p>

                </div>

                <div class="signUpPt1">
                    <form action="../includes/signup.inc.php" id="form" method="post">
                        <div class="formControl">
                            <label for="fullName">Your Full Name*</label><br>
                            <input id="username" type="text" placeholder="Username" name="uid">
                            <i class="fas fa-exclamation-circle"></i>
                            <i class="fas fa-check-circle"></i>
                            <small>Error Message</small>

                        </div>

                        


                        <input class="register" type="submit" name="submit" value="Save & Continue" />


                        

                    </form>

                </div>

            </div>



        </div>

    </div>


    </div>
    <script src="signUpValidationCheck.js"></script>

    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "invaliduid") {
            echo "<p>Choose a proper Username!</p>";

        } else if ($_GET["error"] == "usernametaken"){
            echo "<p>Username already taken!</p>";
        
        }
    }
    ?>

</body>

</html>