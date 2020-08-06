<?php
//setting header to json
header('Content-Type: application/json');

//database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";


//get connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

if(!$mysqli){
  die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("SELECT ID, math FROM dilini ORDER BY ID");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);