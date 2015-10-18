<?php
// DB connection info
$host = "us-cdbr-azure-central-a.cloudapp.net";
$user = "b2c629dc1ba64f";
$pwd = "037a00b2";
$db = "as_105e26c294c8255";
$conn = mysqli_connect($host, $user, $pwd);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($conn,"CREATE TABLE Players (username varchar(255), password varchar(255), firstName varchar(255), lastName varchar(255), email varchar(255), zipcode varchar(255))");
echo json_encode($result);
?>