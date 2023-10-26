<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="icon" href="./logo.jpg" type="image/x-icon">
   <title>Donar Details</title>
</head>
<body>
    <div class="container">
        <header>Donor Form</header>

        <form action="http://localhost/donar.php" method="post" autocomplete="off">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your name" name="fullname" required>
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
                            <input type="text" placeholder="Enter mobile number" name="mobnumber" required>
                        </div>

                        <div class="input-field">
                            <label>Availabity</label>
                            <select name="avaliability" required>
                                <option disabled selected>Select </option>
                                <option>Food</option>
                                <option>Cloth</option>
                                <option>Shelter</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Quantity</label>
                            <input type="text" placeholder="Item Quantity Avaliable" name="amount" required>
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
                        
                        <div class="sumbit" >
                            <input type="submit" class="btnText" value="Submit"name="submit">
                            <i class="uil uil-navigator"></i>
                        </div>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>