<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Arise Ashen One </title>
    <link rel="stylesheet" href="games.css?v=<?php echo time(); ?>"> 
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
    <div class="game-covers">
      <div class="wrapper">
        <a href="dsr.php">
          <div class="game-cover game-cover-1"></div>
        </a>
      </div>
      <div class="wrapper">
        <a href="bb.php">
          <div class="game-cover game-cover-2"></div>
        </a>
      </div>
      <div class="wrapper">
        <a href="sekiro.php">
          <div class="game-cover game-cover-3"></div>
        </a>
      </div>
      <div class="wrapper">
        <a href="er.php">
          <div class="game-cover game-cover-4"></div>
        </a>
      </div>
    </div>
  </body>
</html>