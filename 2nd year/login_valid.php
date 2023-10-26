<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini_project";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['loginSubmit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_query = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql_query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $email;
        header('Location: http://localhost/Mini_Project/index.php');
    } else {
        echo '<script>alert("Invalid credentials. Please try again!")</script>';
    }
}

mysqli_close($conn);
?>