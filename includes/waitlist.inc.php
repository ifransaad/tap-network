<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $refer = $_POST["refer"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputWaitlist($name, $email, $pwd, $pwdRepeat) !== false){
        
        header("location: ../waitlistRegister.php?error=emptyinput");
        exit();
    }

    if(invalidEmail($email) !== false){
        header("location: ../waitlistRegister.php?error=invalidemail");
        exit();
    }

    if(emailExists($conn, $email) !== false){
        header("location: ../waitlistRegister.php?error=emailtaken");
        exit();
    }

    createUserWaitlist($conn, $name, $email, $pwd, $refer);
   

} else {
    header("location: ../waitlistRegister.php");
    exit();
}
