<?php require 'connection.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Needy People</title>
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
            <li><a  href="./index.php">Home</a></li>
            <li><a href="helpers.php">Donor</a></li>
            <li><a class="active" href="needys.php">Needy</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li> <a href="signin.php" target="_blank"> Signin</a></li>
            
          </ul>
        </div>
      </section>
      <section>
    <div class="wrapper">
       <div class="search-input">
        <form action="http://localhost/search_donar.php" method="POST" id="myform">
        <input type="text" placeholder="Enter State...." name ="search">
        <div class="autocom-box">
        </div>
         </form>
         <button type="submit" class="icon" form="myform" value="search" name="submit"><i class="fas fa-search"></i></button>
      </div>
      <div class="but">
        <button class="post1">
        <a href="./needy.php" target="_blank">Helpless</a> 
          </button>
          <button  class="post1"><a href="./want.php" target="_blank">Want</a></button>
      </div> 
    </div>
    <div class="out_btn"> 
    <span id="set">Click to see the Donors Data</span>
    <a href="http://localhost/people_data.php" target="_blank"><button class ="helpless_data"><b>Donor Avaliability</b></button></a>
    </div>
</section>

  </body>
</html>
