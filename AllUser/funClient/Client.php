<?php session_start();
if(isset($_SESSION[ 'UserName-g' ]) and $_SESSION[ 'client' ]!="client"){
    header('Location:http://localhost:8280/gems11');
}
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    
    $UserName_login = $_SESSION[ 'UserName-g' ];
    $Priv = $_SESSION[ 'client' ];
  echo  $UserName_login ;   echo  $Priv ;
   ?>

<button>
        <a href="../../index.php"> Home Page </a>
    </button>

<body>
    
</body>
</html>