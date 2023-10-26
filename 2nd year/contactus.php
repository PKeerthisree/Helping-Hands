<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Contact us Form</title>
      <link rel="stylesheet" href="styless.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="./logo.jpg" type="image/x-icon">
   </head>
   <body>
      <section id="header">
         <a href="#"><img src="ll.jpg.png" class="logo" alt="" height="90px" width="100px"></a>
         <div>
           <ul id="navbar">
             <li><a class="active"  href="index.php">Home</a></li>
             <li><a href="helpers.php">Donor</a></li>
             <li><a href="needys.php">Needy</a></li>
             <li><a href="about.php">About</a></li>
             <li><a href="contactus.php">Contact Us</a></li>
             <li> <a href="signin.php" target="_blank"> Signin</a></li>
             
           </ul>
         </div>
       </section>
      <section>
         <div class="container">
            <div class="text">ContactUs Form</div>
            <form action="#" mail>
               <div class="form-row">
                  <div class="input-data">
                     <input type="text" required>
                     <div class="underline"></div>
                     <label for="">First Name</label>
                  </div>
                  <div class="input-data">
                     <input type="text" required>
                     <div class="underline"></div>
                     <label for="">Last Name</label>
                  </div>
               </div>
               <div class="form-row">
                  <div class="input-data">
                     <input type="text" required>
                     <div class="underline"></div>
                     <label for="">Email Address</label>
                  </div>
                  <div class="input-data">
                     <input type="text" required>
                     <div class="underline"></div>
                     <label for="">Website Name</label>
                  </div>
               </div>
               <div class="form-row">
                  <div class="input-data textarea">
                     <textarea rows="8" cols="80" required></textarea>
                     <br />
                     <div class="underline"></div>
                     <label for="">Write your message</label>
                     <br />
                     <div class="form-row submit-btn">
                        <div class="input-data">
                           <div class="inner"></div>
                           <input type="submit" value="submit">
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </section>
   </body>
</html>