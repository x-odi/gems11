<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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