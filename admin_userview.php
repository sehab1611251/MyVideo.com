<!-- This page will be view from admin level-->
<table style="width:1000px; margin:auto; "border="10px">
       <tr><th colspan="12"><h1>User Record</h1></tr></th>
        <tr>
    <td><h2>ID</h2></td>
    <td><h2>FrstName</h2></td>
    <td><h2>LastName</h2></td>
    <td><h2>UserName</h2></td>
    <td><h2>Email</h2></td>
    <td><h2>Phone</h2></td>
    <td><h2>Address</h2></td>
    <tr>
<?php

    include "connection.php";
$query="select * from userinfo";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result)){
echo"<tr>";
echo"<td>".$row['id']."</td>";
echo"<td>".$row['firstname']."</td>"; 
echo"<td>".$row['lastname']."</td>";
echo"<td>".$row['username']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['phone']."</td>";
echo"<td>".$row['address']."</td>";
echo"</tr>";
  
}
?>
            
         <!DOCTYPE html>

      <html>

      <head>

      <title>Myvideo | User</title>
 
    </head>

     <style>
     body  {
    background-image: url("image/au.jpg");
    background-color: #cccccc;
     }

     #form {
     
    padding-top: 50px; 
   }
   </style>
    





    <body bgcolor= #02FBB7>



        <style>
       .navbar {
        background-color: #2F4F4F;
        }

       .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 ;
       }

     .navbar .navbar-nav li a {
    color: #F8F8F8 ;
     }

     .navbar li a, .navbar .navbar-brand:hover { 
      color: #FFFF00 ;
      }

    .navbar .navbar-nav li a:hover {
     color: #F8F8F8;
    } 
     .carousel{
     margin-top: 0px;
     margin-bottom: 0px;
     padding-top: 0px;
     padding-bottom: 0px;
   }

   .dropdown-menu li a{
    color: black !important;
    }

    .container{
    margin-top: 80px;
   }
 </style>

        <nav class="navbar navbar-default navbar-right">                      
      </button>
      <a class="nav navbar-brand"  href="home.php"><b>MyVideo</b></a> <br><br>
      <a class="nav navbar-brand" href="admin.php"><b>Profile</a></b> <br>
      <br> <a class="nav navbar-brand" href="logout.php"><b>Log Out</a></b> <br>
     </nav>


        <form action="Delete.php" method="post">
           

         <br> <b>ID TO DELETE:</b>&nbsp;<input type="text" name="id" required>

         &nbsp;<input type="submit" name="delete" value="Delete Data"><br><br>

        </form>

     </body>

   </html>   
