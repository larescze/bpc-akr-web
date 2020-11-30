<?php

// Database login details
$dbHost = "hosting.midgard.cz";
$dbUsername = "wlazarov_vut";
$dbPassword = "IV1Q1fJ7JP";
$dbName = "wlazarov_bpc-akr";

// Create connection (MySQLi Object-Oriented)
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
