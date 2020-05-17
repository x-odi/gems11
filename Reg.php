<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<center>

<?php
$q1 =$_GET['q1'];
if ($q1 == 1){ 
  echo "User Name already taken";
}  
if ($q1 == 2){ 
  echo "The password does't match";
}
?>

<form action="/gems11/fun/Reg.php" method="get">
  
  <label for="Uname">User Name:</label>
  <input type="text" id="Uname" name="UserName" placeholder="Exp: You'r Name->Emad Faisal"> <br><br>
  
  <label for="Email">Offical Email:</label>
  <input type="Email" id="Email" name="Email" placeholder="Exp: Emad@gems-ksa.com"> <br><br>
  
  <label for="Company Name">Company Name</label>
  <input type="text" id="CName" name="CompanyName" placeholder="Exp: GEMS"> <br><br>

  <label for="Mobile">Mobile</label>
  <input type="text" id="Mob" name="Mobile" placeholder="Exp: 0559515110"> <br><br> 

  <label for="pass">Password:</label>
  <input type="password" id="pass1_" name="pass1" placeholder="Exp: *********"><br><br>
  <label for="pass">Password:</label>
  <input type="password" id="pass2_" name="pass2" placeholder="Exp: *********"><br><br>
  
  
  <input type="submit" value="Submit">
</form>
<a href="index.php"><button> Home Page </button> </a>
<a href="login.php">  I Have Account</a>


</center>
    
</body>
</html>