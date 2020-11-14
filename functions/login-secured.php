<?php

// Establish and handle MySQL database connection
require_once('connect.php');

$form_error = ' ';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($stmt = $conn->prepare('SELECT id, username, password FROM users_secured WHERE username = ?')) {
            // Bind parameters
            $stmt->bind_param('s', $_POST['username']);
            $stmt->execute();
            $stmt->store_result();

            // If user exists
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($id, $username, $password);
                $stmt->fetch();
                // Verify password
                if (password_verify($_POST['password'], $password)) {
                    // Create session
                    $_SESSION['loggedin'] = true;
                    $_SESSION['id'] = $id;
                    $_SESSION['username'] = $username;
                } else {
                    $form_error = 'Incorrect username or password!';
                    echo $_POST['username'];
                    echo $password;
                }
            } else {
                $form_error = 'User does not exists!';
            }
            $stmt->close();
        }
    } else {
        $form_error = 'Please fill both fields!';
    }
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('Refresh: 0');
}
