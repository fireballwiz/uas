<?php
session_start();
  if (!empty($_SESSION['username'])) {
     header("Location: home.php");  
  }
?>

<html>
 <head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="icon" type="image/png" href="icon.png">  
 </head>
 <body>
  <div class="login">
   <h2 class="login-header">Form Login</h2>
   <form class="login-container" action="connect.php" method="POST">
    <p>
     <input type="text" placeholder="Username" name="username">
    </p>
    <p>
     <input type="password" placeholder="Password" name="password">
    </p>
    <p>
     <input type="submit" value="Login">
    </p>
   </form>
  </div>
 </body>
</html>
