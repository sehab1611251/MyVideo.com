<!DOCTYPE html>
<html lang="en">
<head>
  <title>Myvideo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <script>
  $(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>


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

  /*.input-group{
    border-style: groove;
  }*/
  
  .carousel{
    margin-top: 0px;
    margin-bottom: 0px;
     padding-top: 0px;
     padding-bottom: 0px;
  }
  /*.pro_pic{
    width: 25px;
    height: 25px;
    border-radius: 50px;
  }*/

.dropdown-menu li a{
 color: black !important;
}
/*#contact{
  background-color: grey;
}*/

 /*footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }*/
            
       /*.form-wrap {text-align: center; color:black; font-weight: normal; margin-bottom: 20px;}*/ 









    </style>

    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">MyVideo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href="#">Tariq </a></li> -->
      <li class="dropdown">
        <a href="#"  class="dropdown-toggle" data-toggle="dropdown"><!-- <img src="3.jpg" class="pro_pic"> -->admin <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Profile</a></li>
          <li><a href="#">Log Out</a></li>
          </ul>
      </li>
      <!-- <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li> -->
    </ul>
    </div>
  </div>
</nav>

<br>
<br>
<br>
<br>




<div class="container">

<form action="Adelete.php" method="post">
  <div class="form-group">
    <label for="id">ID To Delete:</label>
    <input type="text" name="id" placeholder="Search.."required class="form-control" id="id">
    <br>
    <input type="submit" name="delete" value="Delete Data">
  </div>
</form>


         
  <h2 align="center">User record</h2>
            
  <!-- <table class="table"> -->
    <div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>firstname</th>
          <th>lastname</th>
          <th>username</th>
          <th>email</th>
          <th>password</th>
          <th>phone</th>
          <th>address</th>
          <!-- <th style="width: 36px;"></th> -->
        </tr>
      </thead>

      <tbody>


       <?php

    include "conn.php";

   $con=new mysqli($host,$user,$pass,$db_name);
   if ($con->connect_error) {
    die("ERROR: ".$con->connect_error);
   }
$query="select * from users";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_array($result)){
echo"<tr>";
echo"<td>".$row['id']."</td>";
echo"<td>".$row['firstname']."</td>";   
echo"<td>".$row['lastname']."</td>";
echo"<td>".$row['username']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['password']."</td>";    
echo"<td>".$row['phone']."</td>";
echo"<td>".$row['address']."</td>";
echo"</tr>";
    
}
?> 


</tbody>

    </table>
</div>

</div>

</body>
</html>
