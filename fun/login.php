<?php

//client login

include('../conn-db.php');
$UserName_login=$_GET['UserName_login'];
$pass1_login=$_GET['pass1_login']; 

$sql = "SELECT * FROM reg WHERE UserName='$UserName_login' AND pass1='$pass1_login' AND Priv='client'";
$result=$conn->query($sql); 
while($row=$result->fetch_assoc()){ 
  $count1= $result->num_rows;   
  
 // $Priv=$_GET['Priv'];
}  
//echo $count;
if($count1 >0 /*&& $Priv =="client"*/){ 
  session_start();
  $_SESSION['UserName-g']= $UserName_login ;
header('Location:http://192.168.1.50:8280/gems11/AllUser/funClient/Client.php');
}
else{
    //Opraion Manegar

 $sql = "SELECT * FROM reg WHERE UserName='$UserName_login' AND pass1='$pass1_login' AND Priv='OpManger'";
 $result=$conn->query($sql); 
 while($row=$result->fetch_assoc()){ 
   $count2= $result->num_rows;   
   
 }  
 //echo $count;
 if($count2 >0){ 
   session_start();
   $_SESSION['UserName-g']= $UserName_login ;
 header('Location:http://192.168.1.50:8280/gems11/AllUser/funOpManger/OpManger.php');
 }
 else{
     
 //Supervisor login

 $sql = "SELECT * FROM reg WHERE UserName='$UserName_login' AND pass1='$pass1_login' AND Priv='Supervisor'";
 $result=$conn->query($sql); 
 while($row=$result->fetch_assoc()){ 
   $count3= $result->num_rows;   
   
 }  
 //echo $count;
 if($count3 >0){ 
   session_start();
   //$_SESSION[ 'count' ]= $count;
   $_SESSION['UserName-g']= $UserName_login ;  
 header('Location:http://192.168.1.50:8280/gems11/AllUser/funSupervisor/Supervisor.php');
 }
 else{
     header('Location:http://192.168.1.50:8280/gems11/login.php');
  }
  }
 
 }
    

?>