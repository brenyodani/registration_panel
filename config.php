<?php

$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "users";

try{
$con = mysqli_connect($host, $user, $password,$dbname);
echo "sikeres";
} catch(Exception $e) {
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
       }
       echo "hiba lepett fel";
}