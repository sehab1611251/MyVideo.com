<?php 
    
   include "connection.php";
  $id=$_POST["id"];
   $comment=$_POST["comment"];
   


   	$sql1="SELECT * FROM u_report WHERE id='$id' OR report='$comment'";
	$result1=$conn->query($sql1);
	
	if ($result1->num_rows > 0) {             //check email address if exist
		echo "This email or username is already exist";
		exit;

	}else{
			$sql="INSERT INTO u_report VALUES ('$id','$comment')";
	   	    $result=$conn->query($sql);
	   	    if($result){
             
	   	    	header("location:home.php");
	   		}else{
	   			echo "Registration Failed";
	   			 }
	   		}	
	   			
	 
   	
 ?>
