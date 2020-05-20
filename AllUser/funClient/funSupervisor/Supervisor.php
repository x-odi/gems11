<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    session_start();
    $UserName_login = $_SESSION[ 'UserName-g' ];
  echo  $UserName_login ;
   ?>

<body>
    
</body>
</html>

