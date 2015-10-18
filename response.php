<?php
// DB connection info
$host = "ealybe55bg.database.windows.net,1433";
$user = "opallity";
$pwd = "Iltemp071993";
$db = "OpallityFinal2";
$conn = mysqli_connect($host, $user, $pwd);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo json_encode('yes');
?>