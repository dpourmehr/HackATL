<?php
$servername = "ealybe55bg.database.windows.net,1433";
$username = "opallity";
$password = "Iltemp071993";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>