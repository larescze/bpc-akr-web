<?php

// Establish and handle MySQL database connection
require_once('connect.php');

$comment_form_error = ' ';

if (isset($_POST['comment'])) {
    $nickname = htmlspecialchars($_POST['nickname'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $message = htmlspecialchars($_POST['message'], ENT_QUOTES);

    if (!empty($nickname) && !empty($email) && !empty($message)) {
        $date = date('Y-m-d H:i:s');

        if ($stmt = $conn->prepare("INSERT INTO comments (nickname, email, date, message) VALUES (?, ?, ?, ?)")) {
            $stmt->bind_param('ssss', $nickname, $email, $date, $message);
            $stmt->execute();
            $stmt->close();
        }
    } else {
        $comment_form_error = 'Please fill out all required fields';
    }
}

$sql = "SELECT id, nickname, date, message FROM comments ORDER BY id DESC";
$result = $conn->query($sql);
$conn->close();
