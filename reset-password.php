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
            text-align: center;

        }

        .content p {
            margin: 0px;
            margin-bottom: 10px;
            text-align: center;
        }

        body::after {
            content: "";
            background: url(../signUp/images/Individual\ Step1.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            opacity: 0.2;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: -1;
        }

        .signupsucess {
            margin: 10px;
            font-size: 24px;
            color: green;
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
                <h1>Reset Your Password</h1>
                <p>An Email will be sent to you with instructions on how to reset your password.</p>
                <form action="includes/reset-request.inc.php" method="post">
                    <input type="text" name="email" placeholder="Enter Your Email Address">
                    <button class="register" type="submit" name="reset-request-submit">Recieve Instructions</button>
                </form>
                <?php
                if (isset($_GET["reset"])) {
                    if ($_GET["reset"] == "success") {
                        echo '<p class = "signupsucess">Check Your Email</p>';
                    }
                }
                ?>
            </div>
        </div>
    </main>
</body>

</html>