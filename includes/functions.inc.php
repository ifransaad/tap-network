<?php
//For Signup
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat){
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    } else {
        $result = false; 
    }
    return $result;
}

function invalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-z]*$/", $username)){
        $result = true;
    } else {
        $result = false; 
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    } else {
        $result = false; 
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    $result;
    if($pwd !== $pwdRepeat){
        $result = true;
    } else {
        $result = false; 
    }
    return $result;
}

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../individualPg1.php?error=failedtosignup");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;

    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd, $gender){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd, usersGender) VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../individualPg1.php?error=failedtosignup");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $username, $hashedPwd, $gender);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../individualPg1.php?error=none");
    exit();
}

//For Login
function emptyInputLogin($username, $pwd){
    $result;
    if(empty($username) || empty($pwd)){
        $result = true;
    } else {
        $result = false; 
    }
    return $result;
}

function loginuser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false){
        header("location: ../logintest.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false){
        header("location: ../logintest.php?error=wronglogin");
        exit();
    } else if ($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersID"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../aboutUs.php");
        exit();
    }
}

//For waitlist
function emptyInputWaitlist($name, $email, $pwd){
    $result;
    if(empty($name) || empty($email) || empty($pwd)){
        $result = true;
    } else {
        $result = false; 
    }
    return $result;
}

function emailExists($conn, $email){
    $sql = "SELECT * FROM waitlist WHERE  usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../waitlistRegister.php?error=failedtosignup");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;

    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUserWaitlist($conn, $name, $email, $pwd, $refer){
    $sql = "INSERT INTO waitlist (usersName, usersEmail, usersPwd, usersRefer) VALUES (?,?,?,?);";
    
    mysqli_query($conn, $sql);
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../waitlistRegister.php?error=failedtoregister");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $hashedPwd, $refer);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    $query = "UPDATE waitlist SET usersPoint = usersPoint+100 WHERE usersRefer = $email";
    mysqli_query($conn, $query);
    $querystmt = mysqli_stmt_init($conn);
    mysqli_stmt_bind_param($querystmt, "ssss", $name, $email, $hashedPwd, $refer);
    mysqli_stmt_execute($querystmt);
    mysqli_stmt_close($querystmt);
    header("location: ../thankYou.php?email=".htmlspecialchars($_POST['email'] ?? '')."&name=".htmlspecialchars($_POST['name'] ?? '')."");
    exit();
}

function getNextIncrement($table) {
    global $conn, $dbName;
    $next_increment = 1;
    $table = mysqli_escape_string($conn, $table);
    $sql = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = '$dbName' AND TABLE_NAME = '$table'";
    $results = $conn->query($sql);
    while($row = $results->fetch_assoc()) {
        $next_increment = $row['AUTO_INCREMENT'];
    }
    return $next_increment-1;
}

function uidExistsWaitlist($conn, $email){
    $sql = "SELECT * FROM waitlist WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../waitlistLogin.php?error=failedtosignup");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;

    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function emptyWaitlistInputLogin($email, $pwd){
    $result;
    if(empty($email) || empty($pwd)){
        $result = true;
    } else {
        $result = false; 
    }
    return $result;
}

function waitlistlogin($conn, $email, $pwd) {
    $uidExistsWaitlist = uidExistsWaitlist($conn, $email);

    if($uidExistsWaitlist === false){
        header("location: ../waitlistLogin.php?error=wrongemail");
        exit();
    }

    $pwdHashed = $uidExistsWaitlist["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false){
        header("location: ../waitlistLogin.php?error=wrongpassword");
        exit();
    } else if ($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExistsWaitlist["usersID"];
        $_SESSION["useremail"] = $uidExistsWaitlist["usersEmail"];
        header("location: ../welcome.php?email=".htmlspecialchars($_POST['email'] ?? '')."");
        exit();
    }
}

//admin

function createUserAdmin($conn, $name, $email, $pwd){
    $sql = "INSERT INTO admin (usersName, usersEmail, usersPwd) VALUES (?,?,?);";
    mysqli_query($conn, $sql);
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../admin-signup.php?error=failedtoregister");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $hashedPwd, $refer);
    mysqli_stmt_execute($stmt);
    
    mysqli_stmt_close($stmt);
    header("location: ../admin-dashboard.php");
    exit();
}

function adminlogin($conn, $email, $pwd) {
    $uidExistsWaitlist = uidExistsWaitlist($conn, $email);

    if($uidExistsWaitlist === false){
        header("location: ../admin-login.php?error=wrongemail");
        exit();
    }

    $pwdHashed = $uidExistsWaitlist["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false){
        header("location: ../admin-login.php?error=wrongpassword");
        exit();
    } else if ($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExistsWaitlist["usersID"];
        $_SESSION["useremail"] = $uidExistsWaitlist["usersEmail"];
        header("location: ../admin-dashboard.php");
        exit();
    }
}

function emptyInputAdmin($name, $email, $pwd){
    $result;
    if(empty($name) || empty($email) || empty($pwd)){
        $result = true;
    } else {
        $result = false; 
    }
    return $result;
}

function emailAdminExists($conn, $email){
    $sql = "SELECT * FROM admin WHERE  usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../admin-signup.php?error=failedtosignup");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;

    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function uidExistsAdmin($conn, $email){
    $sql = "SELECT * FROM admin WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../admin-login.php?error=failedtosignup");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;

    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function emptyAdminInputLogin($email, $pwd){
    $result;
    if(empty($email) || empty($pwd)){
        $result = true;
    } else {
        $result = false; 
    }
    return $result;
}
