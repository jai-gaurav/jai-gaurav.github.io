<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Arise Ashen One </title>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>"> 
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
        <h2>Login</h2>
        <form action="process_login.php" method="post">
          <div class="input-box">
            <span class="icon"></span>
            <input type="text" id="username" name="username" required>
            <label>Username</label>
          </div>
          <div class="input-box">
            <span class="icon"></span>
            <input type="password" id="password" name="password" required>
            <label>Password</label>
          </div>
          <div class="remember-forgot">
            <label><input type="checkbox">
            Remember Me</label>
            <a href="#">Forgot Password?</a>
          </div>
          <button type="submit" class="btn">Login</button>
          <div class="login-register">
            <p>Don't have an account? <a href="register.php" class="register-link">Register</a></p>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>