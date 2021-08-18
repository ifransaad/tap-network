<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputAdmin($name, $email, $pwd, $pwdRepeat) !== false){
        
        header("location: ../admin-signup.php?error=emptyinput");
        exit();
    }

    if(invalidEmail($email) !== false){
        header("location: ../admin-signup.php?error=invalidemail");
        exit();
    }

    if(emailAdminExists($conn, $email) !== false){
        header("location: ../admin-signup.php?error=emailtaken");
        exit();
    }

    createUserAdmin($conn, $name, $email, $pwd);
   

} else {
    header("location: ../admin-signup.php");
    exit();
}
