<?php

 
if(isset($_POST['username']) {
	$dbhost = 'ealybe55bg.database.windows.net';
	$dbuser = 'opallity';
	$dbpass = 'Iltemp071993';

	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die                      ('Error connecting to mysql');

	$dbname = 'OpallityFinal2';
	mysql_select_db($dbname);

	echo 'yes';
}

?>