<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cnectur- Future of Networking</title>
    <link rel="shortcut icon" type="image/jpg" href="icons/favicon.svg" />
    <link rel="stylesheet" href="css/waitlistRegister.css">
    <link rel="stylesheet" href="css/thankYou.css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/03a159b6a0.js" crossorigin="anonymous"></script>
    <style>
        .content {
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .content h1 {
            margin: 10px;
            text-align: left;

        }

        .content p {
            margin: 0px;
            margin-bottom: 10px;
            text-align: center;
        }
    </style>

</head>

<body>
    <main>
        <!-- Navbar -->
        <div class="navbar ">
            <div class="navbarContent">
                <div class="">
                    <a href="index.php"><img class="logo" src="icons/tapWorking.png"></a>
                </div>
            </div>
        </div>

        <!-- Navbar End -->
        <div class="waitListRegisterContainer">
            <div class="content">

                <?php
                $selector = $_GET["selector"];
                $validator = $_GET["validator"];

                if (empty($selector) || empty($validator)) {
                    echo "Could not validate your request!";
                } else {
                    if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                ?>

                        <form action="includes/reset-password.inc.php" method="post">
                            <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                            <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                            <h1>Enter new Password</h1>

                            <input type="password" name="pwd" placeholder="Enter a new password">
                            <input type="password" name="pwd-repeat" placeholder="Repeat new password">
                            <button class="register" type="submit" name="reset-password-submit">Reset Password</button>


                        </form>
                <?php

                    }
                }

                ?>
            </div>
        </div>
    </main>
</body>

</html>