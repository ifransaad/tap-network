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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">


    <script>
        //This function checks email-availability-status
        function checkemailAvailability() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "checkAvailability.php",
                data: 'email=' + $("#email").val(),
                type: "POST",
                success: function(data) {
                    $("#user-email-availability-status").html(data);
                    $("#loaderIcon").hide();
                },
                error: function() {}
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
                <div class="navbar right notMobileOnly">
                    <div class="leftNavbar">
                        <a href="index.php"><img class="logo" style="width: 200px;" src="icons/Logolatest.svg"></a>
                    </div>
                </div>
                <div class="rightAllContent">
                    <div class="navbar mobileOnly">
                        <div class="leftNavbar">
                            <a href="index.php"><img class="logo" style="width: 200px;" src="icons/Logolatest.svg"></a>
                        </div>
                    </div>
                    <div class="rightAllContentHeading">
                        <h1>Register for an invitation!</h1>
                        <p style="font-weight: 500;">An email will be sent to you for you to register
                            on our platform once we are up and running.</p>
                    </div>

                    <div class="signUpPt1">
                        <form action="includes/waitlist.inc.php" id="registration" class="registration" method="post">
                            <label for="username">
                                <div class="inputSection">
                                    <span>Full Name*</span>

                                    <input type="text" id="username" placeholder="Full Name" minlength="3" name="name" required>

                                    <ul class="input-requirements">
                                        <li>At least 3 characters long</li>
                                        <li>Must only contain letters (no special characters)</li>
                                    </ul>

                                </div>

                            </label>

                            <div class="formControl" style="margin-bottom: 20px;">
                                <label for="email" style="font-weight: 500;">Email Address*</label><br>
                                <input id="email" type="text" placeholder="Email Address" name="email" onBlur="checkemailAvailability()" placeholder="Email Address" required="required">
                                <span id="user-email-availability-status"></span>
                            </div>

                            <label for="password">
                                <div class="inputSection">
                                    <span>Password</span>


                                    <input type="password" id="password" placeholder="Password" maxlength="100" minlength="8" name="pwd" required>

                                    <ul class="input-requirements">
                                        <li>At least 8 characters long (and less than 100 characters)</li>
                                        <li>Contains at least 1 number</li>
                                        <li>Contains at least 1 lowercase letter</li>
                                        <li>Contains at least 1 uppercase letter</li>
                                        <li>Contains a special character (e.g. @ !)</li>
                                    </ul>
                                    <i class="bi bi-eye-slash passVisible" id="togglePassword"></i>

                                </div>


                            </label>


                            <label for="password_repeat">
                                <div class="inputSection">
                                    <span>Repeat Password</span>
                                    <input type="password" id="password_repeat" placeholder="Retype Password" maxlength="100" minlength="8" name="pwdrepeat" required>
                                    <ul class="input-requirements">
                                        <li>Password Match</li>
                                    </ul>
                                    <i class="bi bi-eye-slash passVisible" id="toggleRetypePassword"></i>

                                </div>



                            </label>


                            <label for="refer">
                                <span>Referer</span>
                                <input id="refer" type="text" placeholder="Referer Name" name="refer" value="<?php echo $refer; ?>">
                            </label>

                            <br>

                            <input class="register" type="submit" name="submit" value="Join our waitlist" />

                        </form>
                        <div style="transform: translateY(10px); margin-bottom: 20px;">Already a member? <a href="waitlistLogin.php" style="text-decoration: none; color: #1076FD;">Login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="js/waitlistValidation.js"></script>
    <script src="js/passvisible.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>


</body>

</html>