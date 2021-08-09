<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "tap-network";
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
 
// Check connection
if(!$conn) {
    die("Connection Failed: " . mysqli_connect_error());

}