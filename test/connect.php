<?php

$dblocalhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tapnetwork_test";

$con = mysqli_connect($dblocalhost,$dbuser,$dbpass,$dbname);

if (!$con){
    die("failed to connect");
}