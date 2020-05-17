<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEMS-Emad</title>
    

    <?php
    session_start();
    $UserName_login = $_SESSION[ 'UserName-g' ];
  echo  $UserName_login ;
   ?>

</head>
<body>
<center>
    <h1> GEMS </h1>
    <button>
    <a href="login.php"> Login </a>
</button>

<button>
    <a href="Reg.php?q1="> Registration </a>
</button>

<button>
    <a href=""> Logout </a>
</button>
<br>
<img src="pic/pic1.png" alt="No Pic">
<br>
<a href="https://www.gems-ksa.com/" target="_blank"> Offical Web Site OF GEMS </a>

</center>
</body>
</html>