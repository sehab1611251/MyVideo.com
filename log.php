<?php 
    
	 session_start();  
	            
      include "connection.php"; 
             
    	 $username  = $_POST['username'];
    	 $password = $_POST['password'];

    	if (empty($username) || empty($password)) {	
    		 echo "<script>alert('please enter username & Password')</script>";
           }

           elseif($_POST['username']=="admin" && $_POST['password']=="1111")  {
	    	$sql="SELECT * FROM  admin WHERE username='$username' AND password='$password'";
		 
			$result=$conn->query($sql);
			$row = $result->fetch_assoc(); 
		   	if($result->num_rows>0){
		   		 $_SESSION["username"] = $row['username']; 
		   		 $_SESSION["email"] = $row['email'];       
		   		header("location: admin.php");
		    	}else{
		   		 echo "<script>alert('username or password is wrong')</script>";
		    	}
		    }


		 else {
	    	$sql="SELECT * FROM userinfo WHERE username='$username' AND password='$password'";
		 
			$result=$conn->query($sql);
			$row = $result->fetch_assoc();
		   	if($result->num_rows>0){
		   		 $_SESSION["username"] = $row['username'];
		   		 $_SESSION["email"] = $row['email'];
		   		header("location: home.php");
		   	}else{
		   		 echo "<script>alert('username or password is wrong')</script>";
		   	}
		 }	
		 
 ?>





 
  /* require 'connection.php';
 if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login_user ="select * from userinfo where username='$username' && password ='$password'";
    $result = $conn->query($login_user);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $_SESSION["username"] = $row['username'];
        $_SESSION["email"] = $row['email'];
      }
      if($username =="admin")
      {
        header('Location: admin.php');
      }else{
        header('Location: home.php');
      }
    }else{
       
    }
  
}
?>
*/




