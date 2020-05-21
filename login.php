<?php
    session_start();
    session_unset();
    session_destroy();
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gems-login</title>
</head>
<body>
<center>
<form action="/gems11/fun/login.php" method="get">
  <label for="Uname">User Name:</label>
  <input type="text" id="Uname" name="UserName_login" placeholder="Exp: Emad Faisal"> <br><br> 
   
  <label for="pass">Password:</label>
  <input type="password" id="pass" name=" pass1_login" placeholder="Exp: *********"><br><br>
  
  <input type="submit" value="Submit">
</form>
<a href="index.php"><button> Home </button> </a>
<a href="Reg.php">  create an account</a>


</center>
</body>
</html>