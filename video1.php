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

  <script>$(document).ready(function(){
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

  .input-group{
    border-style: groove;
  }
  
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

video {
    max-width: 100%;
    height: auto;
}

.suggestion{
  max-height: 450px;
  overflow-y: scroll;
}

.comment{
  padding-top: 50px;
  padding-right: 350px;
}

  



 
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
        <a href="#"  class="dropdown-toggle" data-toggle="dropdown"><!-- <img src="3.jpg" class="pro_pic"> -->Tariq <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Settings</a></li>
          <li><a href="#">Log Out</a></li>
          </ul>
      </li>
      <div class="input-group">
      <input type="text" class="form-control" placeholder="Search" name="search">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
    </ul>

    <ul class="nav navbar-nav navbar-center">
      <!-- <li><a href="#">Tariq </a></li> -->
      <li class="dropdown">
        <a href="#"  class="dropdown-toggle" data-toggle="dropdown"><!-- <img src="3.jpg" class="pro_pic"> -->Categories <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">php</a></li>
          <li><a href="#">SQL</a></li>
          <li><a href="#">HTML</a></li>
          <li><a href="#">CSS</a></li>
          <li><a href="#">JAVASCRIPT</a></li>
          <li><a href="#">JQUERY</a></li>
          </ul>
      </li>
    </ul>


    </div>
  </div>
</nav>
<br>

<br>

<br>



<div class="container">
<!-- <legend>PHP</legend> -->
<h2>php video tutorial</h2>
<div class="row">
<div class="col-sm-9">

<!-- <video width="800" height="400" controls>
  <source src="video_1.mp4" type="video/mp4"> 
</video> -->

<?php
require 'connection.php';
$id=$_GET['id'];
$sql="SELECT * FROM `video` where id =$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $video_path="video/".$row["video_path"];
        $video_ext= $row["video_ext"];
        $video_path= $video_path.".".$video_ext;
        $video_id = $row['id'];
?>
<div class="col-md-12">
      <div class="thumbnail">
<video  controls autoplay style="width:100%">
  <source src="<?php echo $video_path?>" type="video/mp4">
</video>
      </div>
</div>
<?php
}
} else {
    echo "0 results";
}
$conn->close();
?>




        <button type="button" class="btn btn-default btn-sm" >
          <span class="glyphicon glyphicon-plus"></span> Add to playlist
        </button>





        
       

</div>

<div class="col-sm-3 suggestion" align="right" >

<video width="200" controls>
  <source src="video_1.mp4" type="video/mp4">
</video>

<video width="200" controls>
  <source src="video_1.mp4" type="video/mp4">
</video>

<video width="200" controls>
  <source src="video_1.mp4" type="video/mp4">
</video>

<video width="200" controls>
  <source src="video_1.mp4" type="video/mp4">
</video>

<video width="200" controls>
  <source src="video_1.mp4" type="video/mp4">
</video>

</div>


</div>
</div>


<div class="container">
  <h2>Comment section</h2>
  <br>
  <div class="media">
    <div class="media-left media-top">
      
    </div>
    <div class="media-body">
      <h4 class="media-heading">User Name</h4>



      <form action="Ucomment.php" method="POST">
    <div class="form-group">
      <!-- <label for="caps">caption:</label> -->
      <input type="text" class="form-control" id="comment" placeholder="Enter comment..." type="text" name="comment">
    </div>
   
  <br><br>
    
    <button type="submit" class="btn btn-default" name="comment">post</button>

  </form>
      
       
    </div>
  </div>
</div>





</body>
</html>