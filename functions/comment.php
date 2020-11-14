<?php

// Establish and handle MySQL database connection
require_once('connect.php');

$comment_form_error = ' ';

if (isset($_POST['comment'])) {
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (!empty($nickname) && !empty($email) && !empty($message)) {
        $date = date('Y-m-d H:i:s');

        $sql = "INSERT INTO comments (nickname, email, date, message) VALUES ('$nickname', '$email', '$date', '$message')";

        if ($conn->query($sql) === false) {
            $comment_form_error = 'Could not save the comment: ' . $conn->error;
        }
    } else {
        $comment_form_error = 'Please fill out all required fields';
    }
}

$sql = "SELECT id, nickname, date, message FROM comments ORDER BY id DESC";
$result = $conn->query($sql);
$conn->close();
