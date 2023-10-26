<?php 
require 'connection.php';

if (isset($_POST['submit'])) {
    $id = $_POST['search_input'];
    $result = mysqli_query($conn, "SELECT * FROM want_data WHERE state='$id'");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Searching Donated Details</title>
    <style>

    </style>
</head>
<body>
    <h1 align="center">Daily Needed People Details</h1>
    <div>
    <table border=1 cellpadding=19 cellspacing=0>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Location</th>
        <th>Mobile Number</th>
        <th>Avaliability</th>
        <th>Quantity</th>
        <th>Door NO</th>
        <th>Residency</th>
        <th>Village</th>
        <th>District</th>
        <th>State</th>
        <th>Pincode</th>
        </tr>
        <?php 
        if(isset($result)){
            $i=1;
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$i++."</td>";
                echo "<td>".$row['fullname']."</td>";
                echo "<td>".$row['age']."</td>";
                echo "<td>".$row['location']."</td>";
                echo "<td>".$row['mobnumber']."</td>";
                echo "<td>".$row['needs']."</td>";
                echo "<td>".$row['quantity']."</td>";
                echo "<td>".$row['doorno']."</td>";
                echo "<td>".$row['residency']."</td>";
                echo "<td>".$row['village']."</td>";
                echo "<td>".$row['district']."</td>";
                echo "<td>".$row['state']."</td>";
                echo "<td>".$row['pincode']."</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    </div>
</body>
</html>