<?php
// DB connection info
$host = "us-cdbr-azure-central-a.cloudapp.net";
$user = "b2c629dc1ba64f";
$pwd = "037a00b2";
$db = "as_105e26c294c8255";
$conn = mysqli_connect($host, $user, $pwd);

mysqli_select_db($db, $conn);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sqlResult = mysqli_query("SELECT * FROM Players");
$encode = array();
while($row = mysqli_fetch_array($sqlResult, MYSQL_ASSOC))  {
	$row_array['user'] = $row['username'];
        $row_array['pass'] = $row['password'];
        $row_array['first'] = $row['firstName'];
        $row_array['last'] = $row['lastName'];
        $row_array['email'] = $row['email'];
        $row_array['zipcode'] = $row['zipcode'];

        array_push($json_encode, $row_array);

}
echo json_encode($json_encode);

fclose(handle)

/*if ($conn->query("INSERT INTO Players (username, password, firstName, lastName, email, zipcode) VALUES ('rsmith', '1111', 'Robert', 'Smith', 'frogger287@gmail.com', '30092')") === TRUE) {
    echo json_encode("Rob was entered into the database correctly.");
}
*/
?>