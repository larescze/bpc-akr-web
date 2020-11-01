<?php
$dbHost = "hosting.midgard.cz";
$dbUsername = "wlazarov_vut";
$dbPassword = "IV1Q1fJ7JP";

// Create connection (MySQLi Object-Oriented)
$conn = new mysqli($dbHost, $dbUsername, $dbPassword);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
