<?php require 'connection.php'?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset ="utf-8">
        <title>People Data</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    </head>
    <body>
      <h1 align="center"> Helpless People Data</h1>
    <table class="table" border = 1 cellspacing = 0 cellpadding = 10>
      <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Age</td>
        <td>Location</td>
        <td>Mobile Number</td>
        <td>Gender</td>
        <td>Door NO</td>
        <td>Residency</td>
        <td>Village</td>
        <td>District</td>
        <td>State</td>
        <td>Pincode</td>
        <td>Image</td>
        <td>Add</td>
        <td>Delete</td>
      </tr>
      <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM helpless_people ORDER BY district DESC")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
      <?php $ide=$row["age"]; ?>
     <td><?php echo $i++; ?></td>
     <td><?php echo $row["fullname"]; ?></td>
     <td><?php echo $row["age"]; ?></td>
     <td><?php echo $row["location"]; ?></td>
     <td><?php echo $row["mobnumber"]; ?></td>
     <td><?php echo $row["gender"]; ?></td>
     <td><?php echo $row["doorno"]; ?></td>
     <td><?php echo $row["residency"]; ?></td>
     <td><?php echo $row["village"]; ?></td>
     <td><?php echo $row["district"]; ?></td>
     <td><?php echo $row["state"]; ?></td>
     <td><?php echo $row["pincode"]; ?></td>
     <td> <img src="img/<?php echo $row['image']; ?>" width = 200 height=100 title="<?php echo $row['image']; ?>"> </td>
     <td><a href='http://localhost/Mini_Project/needy.php' target="_blank" ><button class="btn btn-primary">ADD PEOPLE</button></a></td>
     <td><a href='delete1.php?id=<?php echo $row["fullname"]; ?>' ><button class="btn btn-danger">DELETE PEOPLE</button></a></td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    </body>
</html>