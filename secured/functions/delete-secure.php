<?php

if ($_SESSION['loggedin']) {
    // Establish and handle MySQL database connection
    require_once('connect.php');

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
} else {
    header('Location: /');
}
