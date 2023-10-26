<?php
require 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM donation_data WHERE fullname = '$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: people_data.php");
    }
}
?>