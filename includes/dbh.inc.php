<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$serverName = "localhost";
$dbUsername = "thetatab_waitlistuser";
$dbPassword = "?lU3AsMaMZ=E";
$dbName = "thetatab_waitlist";
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
 
// Check connection
if(!$conn) {
    die("Connection Failed: " . mysqli_connect_error());

}