<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>SIGNUP & SIGNIN</title>
        <link rel="stylesheet" href="stylesi.css">
        <script src="https://kit.fontawesome.com/ca01061bd5.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
            <section class="wrapper">
                
                <div class="form signup">
                  <header>Signup</header>
                  <form action="http://localhost/signup.php" method="post">
                    <input type="text" placeholder="Full name" name="fname" required />
                    <input type="text" placeholder="Email address" name="email" required />
                    <input type="password" placeholder="Password" name="password" required />
                    <div class="checkbox">
                      <input type="checkbox" id="signupCheck" required />
                      <label for="signupCheck">I accept all Terms & Conditions</label>
                    </div>
                    <input type="submit" value="Signup" name="signsubmit" />
                  </form>
                </div>
          
                <div class="form login">
                  <header>Login</header>
                  <form action="http://localhost/login_valid.php" method="POST" >
                    <input type="text" placeholder="Email address" name="fname" required />
                    <input type="password" placeholder="Password" name="password" required />
                    <a href="#">Forgot password?</a>
                    <input type="submit" name="login" value="Login" />
                  </form>
                </div>
             
                <script>
                  const wrapper = document.querySelector(".wrapper"),
                    signupHeader = document.querySelector(".signup header"),
                    loginHeader = document.querySelector(".login header");
          
                  loginHeader.addEventListener("click", () => {
                    wrapper.classList.add("active");
                  });
                  signupHeader.addEventListener("click", () => {
                    wrapper.classList.remove("active");
                  });
                </script>
            </section>
    </body>
</html>