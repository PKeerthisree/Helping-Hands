<?php
session_start();
session_destroy();
header('Location: http://localhost/Mini_Project/signin.php');
?>