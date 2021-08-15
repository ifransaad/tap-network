<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TapNetwork- Future of Networking</title>
    <link rel="shortcut icon" type="image/jpg" href="icons/favicon.svg" />
    <link rel="stylesheet" href="css/waitlistRegister.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script>
        //This function checks email-availability-status
        function checkemailAvailabilityLogin() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "checkAvailabilityLogin.php",
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
                            <h1>Welcome to TapNetwork</h1>
                            <p style="font-weight: 500;"></p>
                        </div>

                        <div class="signUpPt1">
                            <form style="margin: 0px 0px 20px 0px;" action="includes/status.inc.php" id="form" class="form" method="post">

                                <div class="formControl ">
                                    <label for="email" style="font-weight: 500;">Email Address*</label><br>
                                    <input id="email" type="text" placeholder="Email Address" name="email" onBlur="checkemailAvailabilityLogin()">
                                    <span id="user-email-availability-status"></span>

                                </div>

                                <div class="formControl">
                                    <label for="pwd">Password*</label><br>
                                    <input id="password" type="password" placeholder="Password" name="pwd">
                                    <i class="bi bi-eye-slash passVisible" id="togglePassword"></i>
                                </div>

                                <input class="register" type="submit" name="submit" value="Check Your Status" />



                            </form>

                            <a style=" text-decoration:none; color: #2f80ed; " href="reset-password.php">Forgot Password?</a>
                            <div style="transform: translateY(10px); margin-bottom: 20px;">Not a member? <a href="waitlistRegister.php" style="text-decoration: none; color: #1076FD;">Sign Up</a></div>
                            <?php
                            if (isset($_GET["error"])) {
                                if ($_GET["error"] == "wrongpassword") {
                                    echo "<span style='color:red; font-size:18px;'>Sorry, Password does not match!</span>";
                                }
                            }

                            if (isset($_GET["newpwd"])) {
                                if ($_GET["newpwd"] = "passwordupdated") {
                                    echo "<p> Your password has been updated. You can login again with the new password.</p>";
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <script src="js/passvisible.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>

</body>

</html>