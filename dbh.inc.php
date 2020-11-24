<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "adminportaldb";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) { //if didn't connect
    die("Connection failed: ".mysqli_connect_error());
}
?>