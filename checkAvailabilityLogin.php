<?php
require_once("includes/dbh.inc.php");

// code user Email availablity
if(!empty($_POST["email"])) {
    $email= $_POST["email"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {
      echo "<span style='color:red; font-size: 12px;'>Email is not valid!</span>";
    } else {
      $result = mysqli_query($conn,"SELECT count(*) FROM waitlist WHERE usersEmail='" . $_POST["email"] . "'");
      $row = mysqli_fetch_row($result);
      $email_count = $row[0];
      if($email_count>0) {
      echo "<span style='color:#2ecc71'>Email found </span>";
      echo "<script>$('#submit').prop('disabled',false);</script>"; 
      } else {
        echo "<p style='color:#e74c3c'>Email not found!</p>";
        echo "<script>$('#submit').prop('disabled',true);</script>";  
      }
  }
}

?>

