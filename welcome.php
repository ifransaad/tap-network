<?php


include 'includes/dbh.inc.php';

include 'includes/functions.inc.php';

$query = "SELECT * FROM waitlist";
if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $point = $row["usersPoint"];
        $name = $row["usersName"];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to cnectur</title>
    <link rel="shortcut icon" type="image/jpg" href="icons/favicon.svg" />
    <link rel="stylesheet" href="css/thankYou.css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <div class="navbar ">
        <div class="navbarContent">
            <div class="">
                <a href="index.php"><img class="logo" src="icons/tapWorking.png"></a>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    <div class="thankYouContainer">
        <div class="thankYouContainer_Body">
            <div class="thankYouContainer_Body_WriteUp">
                <h2>Welcome back, <?php echo $name; ?> </h2>
                <p>Share your link with a friend. When they signup, you receive 100 TapCash. You can claim a free card after having a balance of 400 TapCash.</p>
            </div>
            <div class="thankYouContainer_Body_Box">
                <div class="thankYouContainer_Body_Box_Left">
                    <h1 style="color: #2F80ED;"><?php echo ; ?></h1>
                    <h3>TapCash</h3>
                    <h2>Available in your Vault</h2>
                </div>
                <div class="thankYouContainer_Body_Box_Right">
                    <h1><?php echo 400 ; ?></h1>
                    <p>TapCash required to claim a free card</p>
                </div>
            </div>
        </div>
        <div class="thankYouContainer_ReferLink">
            <div class="thankYouContainer_ReferLink_box">
                <div class="thankYouContainer_ReferLink_box_left">
                    <h3>INVITE A FRIEND: </h3>
                    <input id="myInput" type="text" value="http://localhost/tap-network/waitlistRegister.php?refer=<?php echo  htmlspecialchars($_GET['email'] ?? ''); ?>">
                    <button>
                        <img onclick="myFunction()" src="icons/Mini_Icon/thankYou Page/copylink.svg" alt="" srcset="">
                    </button>
                </div>
                <div class="thankYouContainer_ReferLink_box_right">
                    <h1>100</h1>
                    <h2>TapCash Per Invite</h2>
                </div>
            </div>
            <div class="thankYouContainer_ReferLink_ApiBox">
                <img src="icons/Mini_Icon/thankYou Page/Facebook.png" alt="">
                <img src="icons/Mini_Icon/thankYou Page/twitter.png" alt="">
                <img src="icons/Mini_Icon/thankYou Page/linkedin.png" alt="">
                <img src="icons/Mini_Icon/thankYou Page/instagram.png" alt="">
                <img src="icons/Mini_Icon/thankYou Page/snapchat.png" alt="">
                <img src="icons/Mini_Icon/thankYou Page/reddit.png" alt="">
                <img src="icons/Mini_Icon/thankYou Page/gmail.png" alt="">
            </div>
        </div>
    </div>
    <!-- js -->
    <script>
        function myFunction() {
            /* Get the text field */
            var copyText = document.getElementById("myInput");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            document.execCommand("copy");
        }
    </script>

</body>

</html>