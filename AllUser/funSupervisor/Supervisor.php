<?php session_start();
if(isset($_SESSION[ 'UserName-g' ]) and $_SESSION[ 'Supervisor' ]!="Supervisor"){
    header('Location:http://192.168.1.50:8280/gems11');
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
    $Priv = $_SESSION[ 'Supervisor' ];
  echo  $UserName_login ;   echo  $Priv ;
   ?>

<body>
    
</body>
</html>