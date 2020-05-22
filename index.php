<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>GEMS-Emad</title>
    


</head>
<body>
<center>
    <h1> GEMS </h1>
    <?php
    error_reporting(0);
    session_start();
    if (isSet($_SESSION[ 'UserName-g' ])){
        $UserName_login = $_SESSION[ 'UserName-g'];
        $Priv = $_SESSION[ 'OpManger' ];
        $Priv = $_SESSION[ 'Supervisor' ];
        $Priv = $_SESSION[ 'client' ];
        echo  $UserName_login ; 
        ?>
    <button id="Exit" onclick="myFunction(/*<php session_destroy()?>*/ ) ">
    <a href="login.php"> Logout </a>
        </button>
     <button>
        <a href=" <?php if($Priv=='client') ?> /gems11/AllUser/funClient/Client.php"> Serves </a>
    </button>
 <?php
}else
    {?>
        <button>
        <a href="login.php"> Login </a>
    </button>
    
    <button>
        <a href="Reg.php?q1="> Registration </a>
    </button>
<?php
    }?>



<br>
<img src="pic/pic1.png" alt="No Pic">
<br>
 <a href="https://www.gems-ksa.com/" target="_blank"> Offical Web Site OF GEMS </a>

</center>
</body>


</html>