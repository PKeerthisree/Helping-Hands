<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "de";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $sql_query="INSERT INTO deform (fname) VALUES ('$fname')";
    if(mysqli_query($conn,$sql_query))
    {
        echo "Data Inserted";
    }
    else
    {
        echo "Error: " . $sql ."" . mysqli_error($conn);
    }
}
echo "Connected successfully";
mysqli_close($conn);
?>