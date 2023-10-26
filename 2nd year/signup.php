<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini_project";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['signsubmit']))
{
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql_query="INSERT INTO  registration (fname,email,password) VALUES ('$fname','$email','$password')";
    if(mysqli_query($conn,$sql_query))
    {
        echo '<script>alert("Registerd Successfully!");window.location="http://localhost/Mini_Project/signin.php";</script>';
    }
    else
    {
        echo "Error: " . $sql ."" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>