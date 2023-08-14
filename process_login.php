<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $msg = "<h2>Welcome<br>" . $username . "!</h2>";

    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "webtechproject";

    $conn = new mysqli($servername, $db_username, $db_password, $db_name);

    if ($conn -> connect_error) {
      die("Connection failed! ". $conn->connect_error);
    }

    $sql = "select username, password from users 
    where username='$username' and password='$password';";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '
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
                <button onClick="window.location.href=\'index.php\'" class="btnLogin-popup">Login</button>
              </nav>    
            </header>
        
            <div class="wrapper">
              <div class="form-box login">
                <h2>Logged In!</h2>
              </div>
            </div>
          </body>
        </html>
        ';
    } else {
        header("Location: index.php");
    }
}
?>