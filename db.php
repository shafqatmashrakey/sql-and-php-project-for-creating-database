<?php

// debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$databaseServer = "localhost";
$databaseUser = "mashrakeys1";
$databasePass = "70568766";
$databaseName = "SCSU_CSC235_Spring_2023";

// Create connection
$conn = new mysqli($databaseServer, $databaseUser, $databasePass, $databaseName);

// Validate connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);

}
?>