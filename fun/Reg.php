<?php

include('../conn-db.php');
$UserName=$_GET['UserName'];

$sql = "SELECT * FROM reg WHERE UserName='$UserName' ";
$result=$conn->query($sql); 
while($row=$result->fetch_assoc()){ 
  $count= $result->num_rows;   
}  
if($count >0){ 
header('Location:http://192.168.1.50:8280/gems11/Reg.php?q1=1');
exit();
}

$Email=$_GET['Email'];
$CompanyName=$_GET['CompanyName'];
$Mobile=$_GET['Mobile'];
$pass1=$_GET['pass1'];
$pass2=$_GET['pass2'];  
if($pass1 !== pass2){ 
    header('Location:http://192.168.1.50:8280/gems11/Reg.php?q1=2');
    exit();
   }

$sql = "INSERT INTO reg (UserName, Email, CompanyName, Mobile, pass1)
VALUES ('$UserName', '$Email', '$CompanyName','$Mobile','$pass1')";

$Result=$conn->query($sql) ;
 header('Location:http://192.168.1.50:8280/gems11/login.php')
?>