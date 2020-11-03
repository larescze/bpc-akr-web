<?php

// Establish and handle MySQL database connection
require_once('connect.php');

$formError = ' ';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, password FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Login user and fill session
        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
    } else {
        // Incorrect username
        $formError = 'Incorrect username or password!';
    }
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('Refresh: 0');
}
