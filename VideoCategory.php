<!DOCTYPE html>
<html lang="en">
<head>
  <title>MyVideo</title>
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



var autocollapse = function() {
  
  var tabs = $('#tabs');
  var tabsHeight = tabs.innerHeight();
  
  if (tabsHeight >= 50) {
    while(tabsHeight > 50) {
      //console.log("new"+tabsHeight);
      
      var children = tabs.children('li:not(:last-child)');
      var count = children.size();
      $(children[count-1]).prependTo('#collapsed');
      
      tabsHeight = tabs.innerHeight();
    }
  }
  else {
      while(tabsHeight < 50 && (tabs.children('li').size()>0)) {
      
      var collapsed = $('#collapsed').children('li');
      var count = collapsed.size();
      $(collapsed[0]).insertBefore(tabs.children('li:last-child'));
      tabsHeight = tabs.innerHeight();
    }
    if (tabsHeight>50) { // double chk height again
      autocollapse();
    }
  }
  
};

$(document).ready(function() {
  
    autocollapse(); // when document first loads

  $(window).on('resize', autocollapse); // when window is resized
  
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
        <a href="#"  class="dropdown-toggle" data-toggle="dropdown"><!-- <img src="3.jpg" class="pro_pic"> -->user<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="userprofile.php">profile</a></li>
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


    </div>
  </div>
</nav>

<br>
<br>
<br>
<br>
<br>








<div class="container">

  <!-- <form action="delete.php" method="post">
  <div class="form-group">
    <label for="id">video To Delete:</label>
    <input type="text" name="id" placeholder="Search.."required class="form-control" id="id">
    <br>
    <input type="submit" name="delete" value="Delete video">
  </div>
</form> -->

    <div class="row">
 
      <ul class="nav nav-tabs" id="tabs">
        <li><a data-toggle="tab" href="#php">php</a></li>
          <li><a data-toggle="tab"  href="#SQL">SQL</a></li>
          <li><a data-toggle="tab"  href="#HTML">HTML</a></li>
          <li><a data-toggle="tab"  href="#CSS">CSS</a></li>
          <li><a data-toggle="tab"  href="#JAVASCRIPT">JAVASCRIPT</a></li>    
          <li><a data-toggle="tab" href="#JQUERY">JQUERY</a></li>
      </ul>
      
      <div class="tab-content">

        <div id="php" class="tab-pane fade in <?php if((isset($_GET['id'])) &&($_GET['id']=='php')) echo active; ?>">
          <h3>PHP video</h3>



          <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="1.jpg" alt="Lights" style="width:100px; height:100px">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>

            <!-- <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                                </div>
                            </div> -->
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="2.jpg" alt="Nature" style="width:100px; height:100px">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>

            <!-- <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                                </div>
                            </div> -->
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="3.jpg" alt="Fjords" style="width:100px; height:100px">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>

                          <!-- <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                                </div>
                            </div>
 -->

          </div>
        </a>
      </div>
    </div>
  </div>
  
</div>
   
    <div id="SQL" class="tab-pane fade <?php if((isset($_GET['id'])) &&($_GET['id']=='SQL')) echo active; ?>">
      <h3>SQL</h3>

      <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="1.jpg" alt="Lights" style="width:100px; height:100px">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            <!-- <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                                </div>
                            </div> -->
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="2.jpg" alt="Nature" style="width:100px; height:100px">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            <!-- <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                                </div>
                            </div> -->
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="3.jpg" alt="Fjords" style="width:100px; height:100px">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            <!-- <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                                </div>
                            </div> -->
          </div>
        </a>
      </div>
    </div>
  </div>
        
         
         
    </div>


    <div id="HTML" class="tab-pane fade <?php if((isset($_GET['id'])) &&($_GET['id']=='HTML')) echo active; ?>">
      <h3>HTML</h3>

      <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="1.jpg" alt="Lights" style="width:100px; height:100px">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            <!-- <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                                </div>
                            </div> -->
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="2.jpg" alt="Nature" style="width:100px; height:100px">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            <!-- <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                                </div>
                            </div> -->
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="3.jpg" alt="Fjords" style="width:100px; height:100px">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            <!-- <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                                </div>
                            </div> -->
          </div>
        </a>
      </div>
    </div>
  </div>
        
         
         
    </div>

    <div id="CSS" class="tab-pane fade <?php if((isset($_GET['id'])) &&($_GET['id']=='CSS')) echo active; ?>">
      <h3>CSS</h3>

      <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="1.jpg" alt="Lights" style="width:100px; height:100px">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            <!-- <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                                </div>
                            </div> -->
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="2.jpg" alt="Nature" style="width:100px; height:100px">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            <!-- <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                                </div>
                            </div> -->
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="3.jpg" alt="Fjords" style="width:100px; height:100px">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            <!-- <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                                </div>
                            </div> -->
          </div>
        </a>
      </div>
    </div>
  </div>
        
         
         
    </div>

    <div id="JAVASCRIPT" class="tab-pane fade <?php if((isset($_GET['id'])) &&($_GET['id']=='JAVASCRIPT')) echo active; ?>">
      <h3>JAVASCRIPT</h3>

      <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="1.jpg" alt="Lights" style="width:100px; height:100px">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            <!-- <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                                </div>
                            </div> -->
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="2.jpg" alt="Nature" style="width:100px; height:100px">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            <!-- <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                                </div>
                            </div> -->
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="3.jpg" alt="Fjords" style="width:100px; height:100px">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            <!-- <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                                </div>
                            </div> -->
          </div>
        </a>
      </div>
    </div>
  </div>
        
         
         
    </div>

    <div id="JQUERY" class="tab-pane fade <?php if((isset($_GET['id'])) &&($_GET['id']=='JQUERY')) echo active; ?>">
      <h3>JQUERY</h3>

      <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="1.jpg" alt="Lights" style="width:100px; height:100px">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            <!-- <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                                </div>
                            </div> -->
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="2.jpg" alt="Nature" style="width:100px; height:100px">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            <!-- <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                                </div>
                            </div> -->
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="3.jpg" alt="Fjords" style="width:100px; height:100px">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            <!-- <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                      <a class="btn btn-success" href="http://www.jquery2dotnet.com">Delete</a>
                                </div>
                            </div> -->
          </div>
        </a>
      </div>
    </div>
  </div>
        
         
         
    </div>
    
     
   
  </div>
</div>
</div>

 
</body>
</html>




