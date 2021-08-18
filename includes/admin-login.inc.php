<?php

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyAdminInputLogin($email, $pwd) !== false){
        header("location: ../admin-login.php?error=emptyinput");
        exit();
    }

    adminlogin($conn, $email, $pwd);
    
    } else {
        header("location: ../admin-login.php");
    exit();
}