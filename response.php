<?php
// DB connection info
$host = "us-cdbr-azure-central-a.cloudapp.net";
$user = "b2c629dc1ba64f";
$pwd = "037a00b2";
$db = "as_105e26c294c8255";
$conn = new mysqli($host, $user, $pwd, $db);

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if ($mysqli->query("CREATE TABLE Players (username varchar(255), password varchar(255), firstName varchar(255), lastName varchar(255), email varchar(255), zipcode varchar(255))") === TRUE) {
    echo json_encode("Table myCity successfully created.");
}

?>