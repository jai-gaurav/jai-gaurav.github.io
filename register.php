<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Arise Ashen One </title>
    <link rel="stylesheet" href="register.css?v=<?php echo time(); ?>">
    <script src="register.js"></script> 
  </head>

  <body>
    <header>
      <h2 class="logo"> Souls-Like.inc </h2>
      <nav class="navigation">
        <a href="about.php">About</a>
        <a href="games.php">Games</a>
        <button onClick="window.location.href='index.php'" class="btnLogin-popup">Login</button>
      </nav>    
    </header>

    <div class="wrapper">
      <div class="form-box login">
        <h2>Register</h2>
        <form onsubmit="return validateRegistration()" action="process_registration.php" method="post">
          <div class="input-box">
            <input type="text" id="username" name="username" required>
            <label>Username</label>
          </div>
          <div class="input-box">
            <input type="email" id="email" name="email" required>
            <label>Email</label>
          </div>
          <div class="input-box">
            <input type="password" id="pwd1" name="pwd1" required>
            <label>Password</label>
          </div>
          <div class="input-box">
            <input type="password" id="pwd2" name="pwd2" required>
            <label> Confirm Password</label>
          </div>
          <button type="submit" class="btn">Register</button>
          <div class="login-register">
            <p>Already have an account? <a href="index.php" class="register-link">Login</a></p>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>