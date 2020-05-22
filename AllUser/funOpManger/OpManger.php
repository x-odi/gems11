<?php session_start();
if(isset($_SESSION[ 'UserName-g' ]) and $_SESSION[ 'OpManger' ]!="OpManger"){
    header('Location:http://192.168.1.50:8280/gems11');
}
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link rel="stylesheet" href="style.php? v=<?php echo time();?>">
  
</head>

<?php
    
    $UserName_login = $_SESSION[ 'UserName-g' ];
    $Priv = $_SESSION[ 'OpManger' ];
  echo  $UserName_login ;   echo  $Priv ;
   ?>
   <button>
        <a href="../../index.php"> Home Page </a>
    </button>

    <div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
</div>

<div class="main">
  <p>Some text some text some text some text..</p>
</div>

<body>

<body>
    
</body>
</html>