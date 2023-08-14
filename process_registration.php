<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pwd1'];

    $success_msg = "<h2>Congratulations " . $username . 
      "!</h2>" . '<br><p>Welcome to the soulsbornekiroring 
      family. Engage with other fellow tarnished, ashen ones,
      chosen undeads, hunters, monarchs and shinobis!';
    
    $fail_msg = "<h2>Error!</h2><br><p>Failed to add user to 
    database. Try again with a different username.";

    $msg = $success_msg;

    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "webtechproject";

    $conn = new mysqli($servername, $db_username, $db_password, $db_name);

    if ($conn -> connect_error) {
      die("Connection failed! ". $conn->connect_error);
    }

    $sql = "insert into users values ('$username', '$email', '$password')";
    
    try {
      $result = $conn->query($sql);
    } catch (Exception $e) {
      $msg = $fail_msg;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Arise Ashen One </title>
    <link rel="stylesheet" href="process_registration.css?v=<?php echo time(); ?>">
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
        <?php echo($msg) ?>
      </div>
    </div>
  </body>
</html>