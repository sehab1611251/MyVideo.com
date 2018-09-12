<?php 

   include "connection.php";
     //register form user in this portion
   $id=$_POST["id"];
   $firstname=$_POST["firstname"];
   	$lastname=$_POST["lastname"];
   	$username=$_POST["username"];
   	$email=$_POST["email"];
   	$password=$_POST["password"];
   	$phone=$_POST["phone"];
   	$address=$_POST["address"];


   	$sql1="SELECT * FROM userinfo WHERE email='$email' OR username='$username'";
	$result1=$conn->query($sql1);
	
	if ($result1->num_rows > 0) {             //check email address if exist
		echo "This email or username is already exist";
		exit;

	}else{
			$sql="INSERT INTO userinfo VALUES ('$id','$firstname','$lastname','$username','$email','$password','$phone','$address')";
	   	    $result=$conn->query($sql);
	   	    if($result){
             
	   	    	header("location:success.html");
	   		}else{
	   			  echo "<script>alert('your id is taken already,please enter another id')</script>";

	   			 }
	   		}	
	 
   	
 ?>





