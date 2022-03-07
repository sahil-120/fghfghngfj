<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL); 

$sname = "localhost";
$uname = "root";
$pass = "";
$db_name = "school";

$conn = mysqli_connect($sname, $uname, $pass, $db_name);

if(!$conn){
    echo "connection failed";
}