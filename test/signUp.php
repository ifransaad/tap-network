<?php
session_start();
include("connect.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = $_POST['username'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $countryCode = $_POST['countryCode'];

    if (!empty($username) && !empty($fullName) && !empty($email) && !empty($password)) {

        $user_id = random_number(20);
        $query = "insert into signup_form (userID,userName,fullName,email,password,gender,country,country_code)  values ('$user_id','$username','$fullName','$email','$password','$gender','$country','$countryCode') ";
        mysqli_query($con, $query);
        die;
    } else {
        echo "Enter Information.";
    }
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signUp</title>
    <link rel="stylesheet" href="signUpStyle.css">
    <script src="https://kit.fontawesome.com/03a159b6a0.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="signUpBox">

        <div class="signUpBoxHeader">
            <h1>Sign Up</h1>
        </div>
        <div class="signUpBoxBody">
            <div class="signUpBoxLeft">

                <form method="post" id="form" class="form">
                    <div class="formControl">
                        <input id="username" type="text" placeholder="Username" name="uid">
                        <i class="fas fa-exclamation-circle"></i>
                        <i class="fas fa-check-circle"></i>
                        <small>Error Message</small>

                    </div>
                    <div class="formControl ">
                        <input id="fullName" type="text" placeholder="Full Name" name="name">
                        <i class="fas fa-exclamation-circle"></i>
                        <i class="fas fa-check-circle"></i>
                        <small>Error Message</small>

                    </div>
                    <div class=" formControl ">
                        <input id="email" type="text" placeholder="E-mail" name="email">
                        <i class="fas fa-exclamation-circle"></i>
                        <i class="fas fa-check-circle"></i>
                        <small>Error Message</small>

                    </div>
                    <div class=" formControl ">
                        <input id="password" type="password" placeholder="Password" name="pwd">
                        <i class="fas fa-exclamation-circle"></i>
                        <i class="fas fa-check-circle"></i>
                        <small>Error Message</small>

                    </div>
                    <div class=" formControl">
                        <input id="password2" type="password" placeholder="Retype Password" name="pwdrepeat">
                        <i class="fas fa-exclamation-circle"></i>
                        <i class="fas fa-check-circle"></i>
                        <small>Error Message</small>

                    </div>
                    <div class=" formControl">
                        <select name="gender" id="gender" size="1">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class=" formControl">
                        <select name="country" id="country" size="1">
                            <option value="usa">USA</option>
                            <option value="uk">UK</option>
                            <option value="bd">Bangladesh</option>
                        </select>
                    </div>
                    <div class=" formControl">
                        <select name="countryCode" id="countryCode" size="1">
                            <option data-countryCode="US" value="1" selected>USA (+1)</option>
                            <option data-countryCode="GB" value="44">UK (+44)</option>
                            <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                        </select>
                    </div>

                    <input type="submit" name="formSubmit" value="Sign Up">

                </form>


            </div>
            <div class="signUpBoxMiddle">
                <div class="circle">
                    <h3>OR</h3>
                </div>
            </div>
            <div class="signUpBoxRight">
                <div class="facebook">
                    <h4>Log in with Facebook</h4>
                </div>
                <div class="twitter">
                    <h4>Log in with Twitter</h4>
                </div>
                <div class="google">
                    <h4>Log in with Google+</h4>
                </div>
            </div>
        </div>




    </div>



    <script src="signUpScript.js"></script>
</body>

</html>