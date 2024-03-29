<html>
  <head>
    <meta charset="utf-8">
    <title>AQSTILLS | Log In</title>
    <link rel="stylesheet" href="css/login.css">
  </head>


  <header id="navbar">
    <img src="img/white logo.png" alt="AQSTILLS" width="200px" class="logo">
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
      </ul>
    </nav>
  </header>

  <body>
    <div class="login-page">
      <div class="form">
        <form class="register-form" action="login/signup.php" method="post">
          <img src="img/blacklogo-only.png" alt="" width="100px">
          <h3>Sign Up <br> <span>to continue to aqstills</span></h3>
          <input type="text" name="username" placeholder="username" autocomplete="off">
          <input type="password" name="password" placeholder="password" autocomplete="off">
          <input type="email" name="email" placeholder="email id" autocomplete="off">
          <button class="button" type="submit" name="submit" type="signup">Create</button>
          <p class="message">Already Registered? <a href="#">Log in</a></p>
        </form>

        <form class="login-form" action="login/loginvalidate.php" method="post">
          <img src="img/blacklogo-only.png" alt="" width="100px">
          <h3>Sign In <br> <span>to continue to aqstills</span></h3>
          <input type="text" placeholder="username" name="username" autocomplete="off">
          <input type="password" placeholder="password" name="password" autocomplete="off">
          <button class="button" type="submit" value="signin" name="submit">Log In</button>
          <p class="message">Not Registered? <a href="#">Register Now</a></p>
        </form>

      </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js
     "></script>

     <script>
       $('.message a').click(function(){
        $('form').animate({height:"toggle", opacity:"toggle"},"slow");
       });
     </script>

  </body>
</html>
