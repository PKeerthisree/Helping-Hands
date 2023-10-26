<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini_project";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    $fullname=$_POST['fullname'];
    $age=$_POST['age'];
    $location=$_POST['location'];
    $mobnumber=$_POST['mobnumber'];
    $avaliability=$_POST['needs'];
    $amount=$_POST['amount'];
    $doorno=$_POST['doorno'];
    $residency=$_POST['residency'];
    $village=$_POST['village'];
    $district=$_POST['district'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $sql_query="INSERT INTO  want_data (fullname,age,location,mobnumber,needs,quantity,doorno,residency,village,district,state,pincode) VALUES ('$fullname','$age','$location','$mobnumber','$avaliability','$amount','$doorno','$residency','$village','$district','$state','$pincode')";
    if(mysqli_query($conn,$sql_query))
    {
        echo '<script>alert("Registerd Successfully!")</script>';
    }
    else
    {
        echo "Error: " . $sql ."" . mysqli_error($conn);
    }
}
header('location:http://localhost/Mini_Project/want.php');
mysqli_close($conn);
?>