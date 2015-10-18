<?php
$servername = "ealybe55bg.database.windows.net,1433";
$username = "opallity";
$password = "Iltemp071993";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>