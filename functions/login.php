<?php

// Establish and handle MySQL database connection
include 'connect.php';

$formError = ' ';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($username) && isset($password)) {
        $sql = "SELECT id, username, password FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Password verification
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
        } else {
            // Incorrect username
            $formError = 'Incorrect username or password!';
        }
    }
}

$sql = "SELECT id, nickname, date, comment FROM comments ORDER BY id DESC";
$result = $conn->query($sql);

if (isset($_POST['logout'])) {
    session_destroy();
    header('Refresh: 0');
}
