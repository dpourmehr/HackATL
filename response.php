<?php
 $username = 'opallity';
$password = 'Iltemp071993';
$host = 'ealybe55bg.database.windows.net';
$database = 'OpallityFinal2';
$port = '1433'; 

$conn = mysql_connect($host.':'.$port, $username, $password);
$db=mysql_select_db($database,$conn);
?>