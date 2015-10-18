<?php
$localhost = 'us-cdbr-azure-central-a.cloudapp.net';
$my_user = 'b2c629dc1ba64f';
$my_password = '037a00b2';
$my_db = ''
$link = mysqli_connect('$localhost', '$my_user', '$my_password', '$my_db');

if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

echo 'Connected... ' . mysqli_get_host_info($link) . "\n";
?>