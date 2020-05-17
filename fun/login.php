<?php

include('../conn-db.php');
$UserName_login=$_GET['UserName_login'];
$pass1_login=$_GET['pass1_login']; 

$sql = "SELECT * FROM reg WHERE UserName='$UserName_login' AND pass1='$pass1_login'";
$result=$conn->query($sql); 
while($row=$result->fetch_assoc()){ 
  $count= $result->num_rows;   
  
}  
//echo $count;
if($count >0){ 
  session_start();
  $_SESSION['UserName-g']= $UserName_login ;
header('Location:http://192.168.1.50:8280/gems11/index.php');
}
else{
    header('Location:http://192.168.1.50:8280/gems11/login.php');
 }
    
?>