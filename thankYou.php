<?php


include 'includes/dbh.inc.php';

include 'includes/functions.inc.php';

$query = "SELECT * FROM waitlist";
    if($result = $conn->query($query)){
        while ($row = $result->fetch_assoc()){
            $point = $row ["usersPoint"];
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to TapNetwork</title>
    <link rel="shortcut icon" type="image/jpg" href="icons/favicon.svg" />
    <link rel="stylesheet" href="css/thankYou.css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
<div class="navbar ">
            <div class="navbarContent">
                <div class="">
                    <a href="index.php"><img class="logo" src="icons/Logolatest.svg"></a>
                </div>
            </div>
</div>

    <!-- Navbar End -->
<div class="thankyouContainer">

    <div class="sec1">
        <h1>Thank you, <?php echo htmlspecialchars($_GET['email'] ?? ''); ?> <br> for joining the waitlist!
            <br>
            <!-- We will email you as soon as we launch so you can be one of the <br>
        FIRST ones to have access to our platform and our Tap Cards!! -->
        </h1>
    </div>

    <div class="sec2">
        <h2>
            <?php echo "<span>Your position at the waiting list is :</span><br>" . getNextIncrement('waitlist');; ?>
            <br>
        </h2>
    
    </div>

    <div class="sec5">
        <h2>
            You have earned the following TapCredits : <br> <span><?php echo $point; ?> </span></h2>
            <p>**Please wait a while while our staff is verifying your TapCredits.</p>
        
    
    </div>

    <div class="sec3">
    <h3>Top 100 Positions: </h3>
    <p>You can share and invite your friends to join. </p>
    </div>
    
    <div class="sec4">
        <h3>Here is your referral link: <br> </h3>
        <!-- The text field -->
        <div class="sec4Bottom">
            <input type="text" class="linkReferral" value="http://localhost/tap-network/waitlistRegister.php?refer=<?php echo  htmlspecialchars($_GET['email'] ?? ''); ?>" id="myInput">

        <!-- The button used to copy the text -->
        <button onclick="myFunction()" class="copyTextButton">Copy Link</button>

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
