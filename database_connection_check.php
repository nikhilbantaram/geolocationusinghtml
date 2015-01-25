<?php
$mysqli = new mysqli("localhost", "root", "test", "htmlgeolocation");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$mysqli->close();
?>