<?php

$servername="127.0.0.1:3309"; //KALI IP address
$username = "testAIH";
$password = "Test123$";
$db = "ecommerce"; //do not change

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
   die("Connection failed: " . mysqli_connect_error());
}


?>