<?php require 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title>Helpless People</title>
</head>
<body>
    <div class="container">
        <header>Details of the Helpless People</header>

        <form action="http://localhost/helpless_people.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your name" name="fullname" id="name" required>
                        </div>

                        <div class="input-field">
                            <label>Age</label>
                            <input type="number" placeholder="Enter age" name="age" required>
                        </div>

                        <div class="input-field">
                            <label>Location</label>
                            <input type="text" placeholder="Enter location" name="location" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" placeholder="Enter mobile number" name="mobnumber" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Image</label>
                            <input type="file" name="image" id="image" class ="upload_box" accept="image/*">
                        </div>
                    </div>
                </div>

                 <span class="title">Address Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Door no</label>
                            <input type="text" placeholder="Enter Door No" name="doorno" required>
                        </div>

                        <div class="input-field">
                            <label>Residency</label>
                            <input type="text" placeholder="Enter Residency" name="residency" required>
                        </div>

                        <div class="input-field">
                            <label>Village</label>
                            <input type="text" placeholder="Enter village" name="village" required>
                        </div>

                        <div class="input-field">
                            <label>District</label>
                            <input type="text" placeholder="Enter District" name="district" required>
                        </div>

                        <div class="input-field">
                            <label>State</label>
                            <input type="text" placeholder="Enter State" name="state" required>
                        </div>

                        <div class="input-field">
                            <label>Pin code</label>
                            <input type="number" placeholder="Enter pincode" name="pincode" required>
                        </div>
                        
                        <div>
                        <input class="sumbit" type="submit" name="submit">
                        </div>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>