<?php

// Getting data from URL parameters
$name = $_GET['name'];
$address = $_GET['address'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];

// Opens a connection to a MySQL server
$connection=mysqli_connect ("localhost", "root", "test");
if (!$connection) {
  die('Not connected : ' . mysqli_error());
}

// Set the active MySQL database
$db_selected = mysqli_select_db($connection,"htmlgeolocation");
if (!$db_selected) {
  die ('Can\'t use db : ' . mysqli_error());
}

// Insert new row with user data
$query = "";
$query = "INSERT INTO locationadd(name, address, lat, lng) VALUES ('".$name."', '".$address."', ".$lat.", ".$lng.")";
//echo $query;
$result = mysqli_query($connection, $query);

echo $result;

if (!$result) {
   echo $result;
}

?>