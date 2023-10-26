<?php
require 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM helpless_people WHERE fullname = '$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: needy_table.php");
    }
}
?>