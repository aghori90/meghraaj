<?php
$host = "localhost";
$user = "amber";
$password = "Amber@123";
$dbname = "meghraaj"; 

// Attempt to connect to MySQL database
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
}
?>