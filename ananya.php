<?php 
    
    $host="localhost";  ///connected server index,delete,login,view,logout,read,update
 	$user="root";
    $pass="";
    $db_name="yamaha";   /// Database name view


   $con=new mysqli($host,$user,$pass,$db_name);
   if ($con->connect_error) {
   	die("ERROR: ".$con->connect_error);
   }
   else
   
	   echo "success";
    

 ?>