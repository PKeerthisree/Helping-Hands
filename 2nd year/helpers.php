<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Helpless People data</title>
    <link rel="stylesheet" href="style.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="./logo.jpg" type="image/x-icon">
  </head>
  <body>
    <section id="header1">
        <a href="#"><img src="ll.jpg.png" class="logo" alt="" height="90px" width="100px"></a>
        <div>
          <ul id="navbar">
            <li><a  href="index.php">Home</a></li>
            <li><a class="active"  href="helpers.php">Donor</a></li>
            <li><a href="needys.php">Needy</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li> <a href="signin.php"> Signin</a></li>
            
          </ul>
        </div>
      </section>
      <section>
    <div class="wrapper">
      <div class="search-input">
        <form action="http://localhost/search_needy.php" method="POST" id="myform">
        <input type="text" name ="search_input" placeholder="Enter State . . . . . .">
        <div class="autocom-box">
        </div>
        </form>
        <button type="submit" class="icon" form="myform" value="search" name="submit"><i class="fas fa-search"></i></button>
      </div>
      <div >
        <button class="post1"><a target="_blank" href="./donorwe.php ">POST</a></button>
      </div>
    </div>
   <div class="out_btn"> 
    <span id="set">Click to see the People Data</span>
    <a href="http://localhost/needy_table.php" target="_blank"><button class ="helpless_data"><b>Needy People Data</b></button></a>
    <span id="set">Click to see the People Data</span>
    <a href="http://localhost/want_display.php" target="_blank"><button class ="helpless_data"><b>Daily Needs Wanted People</b></button></a>
  </div>
</section>
  </body>
</html>