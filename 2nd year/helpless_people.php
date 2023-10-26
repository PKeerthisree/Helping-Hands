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
    $gender=$_POST['gender'];
    $doorno=$_POST['doorno'];
    $residency=$_POST['residency'];
    $village=$_POST['village'];
    $district=$_POST['district'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
        $fileName= $_FILES["image"]["name"];
        $tmpName= $_FILES["image"]["tmp_name"];
        $imageExtension=explode('.',$fileName);
        $imageExtension= end($imageExtension);
        $newImageName= uniqid();
        $newImageName.='.' . $imageExtension;
        move_uploaded_file($tmpName,'img/' . $newImageName);
        $sql_query="INSERT INTO  helpless_people(fullname,age,location,mobnumber,gender,doorno,residency,village,district,state,pincode,image) VALUES ('$fullname','$age','$location','$mobnumber','$gender','$doorno','$residency','$village','$district','$state','$pincode','$newImageName')";
        echo "<script>alert('Registerd Successfully')</script>";
        if(mysqli_query($conn,$sql_query))
       echo "<script>alert('Registerd Successfully!')</script>";
}
header('Location:http://localhost/Mini_Project/needy.php');
mysqli_close($conn);
?>