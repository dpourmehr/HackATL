<?php
// DB connection info
$host = "us-cdbr-azure-central-a.cloudapp.net";
$user = "b2c629dc1ba64f";
$pwd = "037a00b2";
$db = "as_105e26c294c8255";
$conn = mysqli_connect($host, $user, $pwd, $db);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sqlResult = mysqli_query("SELECT * FROM Players");
$results = array();
while($row = mysqli_fetch_assoc($sqlResult)) {
	$results[] = $row;
}
echo json_encode($results);

/*if ($conn->query("INSERT INTO Players (username, password, firstName, lastName, email, zipcode) VALUES ('rsmith', '1111', 'Robert', 'Smith', 'frogger287@gmail.com', '30092')") === TRUE) {
    echo json_encode("Rob was entered into the database correctly.");
}
*/
?>