<?php
// DB connection info
$host = "us-cdbr-azure-central-a.cloudapp.net";
$user = "b2c629dc1ba64f";
$pwd = "037a00b2";
$db = "as_105e26c294c8255";

$mysqli = new mysqli($host,$user,$pwd,$db);

if(isset($_POST['username']) && isset($_POST['password'])) {
	$myArray = array();
	if ($result = $mysqli->query("INSERT INTO Players (username, password, opalls, firstName, lastName, email, zipcode) VALUES ('rsmith', '1111', '0', Robert', 'Smith', 'frogger287@gmail.com', '30096')") {

	}
}

$result = $mysqli->query("Select * From as_105e26c294c8255 where TABLE_NAME='Players'");
echo json_encode($result);


/*if ($conn->query("INSERT INTO Players (username, password, firstName, lastName, email, zipcode) VALUES ('rsmith', '1111', 'Robert', 'Smith', 'frogger287@gmail.com', '30092')") === TRUE) {
    echo json_encode("Rob was entered into the database correctly.");
}
*/
?>