<?php

// Database login details
$dbHost = "";
$dbUsername = "";
$dbPassword = "";
$dbName = "";

// Create connection (MySQLi Object-Oriented)
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
