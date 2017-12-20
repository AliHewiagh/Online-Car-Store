<?php

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection

$conn = mysqli_connect("localhost", "root", "root" , "MyWebsite");


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





?>