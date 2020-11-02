<?php
ob_start();
// Establish and handle MySQL database connection
include 'connect.php';

$id = $_GET['id'];

if (isset($id)) {
    $sql = "DELETE FROM comments WHERE id = '$id'";

    if ($conn->query($sql) === true) {
        header('Location: /');
    } else {
        die("Error deleting record: " . $conn->error);
    }
} else {
    header('Location: /');
}
