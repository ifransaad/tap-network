<?php

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

     require_once 'dbh.inc.php';
     require_once 'functions.inc.php';

     if(emptyWaitlistInputLogin($email, $pwd) !== false){
         header("location: ../waitlistLogin.php?error=emptyinput");
        exit();
     }

     waitlistlogin($conn, $email, $pwd);
    
     } else {
         header("location: ../waitlistRegister.php");
     exit();
}