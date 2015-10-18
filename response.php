<?php
// DB connection info
$host = "tcp:ealybe55bg.database.windows.net,1433";
$user = "opallity";
$pwd = "Iltemp071993";
$db = "OpallityFinal2";
try{
    $conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "CREATE TABLE registration_tbl(
    id INT NOT NULL IDENTITY(1,1) 
    PRIMARY KEY(id),
    name VARCHAR(30),
    email VARCHAR(30),
    date DATE)";
    $conn->query($sql);
}
catch(Exception $e){
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
try {$conn = new PDO ( \"sqlsrv:server = tcp:ealybe55bg.database.windows.net,1433; Database = OpallityFinal2\", \"opallity\", \"{Iltemp071993}\");\r\n    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ");} catch ( PDOException $e ) {print( "Error connecting to SQL Server." );   die(print_r($e));}
?>