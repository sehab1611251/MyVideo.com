<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<style>
body  {
    background-image: url("ocean.jpg");
    background-color: #cccccc;
}

#form {
    /*border: 1px solid black;*/
    /*background-color: lightblue;*/
    padding-top: 50px;
    /*padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;*/
}
</style>

<body>

 

<div class="container" >
  
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
  <div id="form" class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">Sign up</div>
      <div class="panel-body">


         
          
         <form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <!-- <legend class="">Register</legend> -->
    </div>

    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="id">ID</label>
      <div class="controls">
        <input type="text" id="id" name="id" placeholder="" class="input-xlarge" required>
        <p class="help-block">id can contain any letters or numbers, without spaces</p>
      </div>
    </div>

    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" style="padding-right: 30px;" id="username" name="username" placeholder="" class="input-xlarge" required>
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text"  style="padding-right: 30px;" id="email" name="email" placeholder="" class="input-xlarge" required>
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>

    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="address">Address</label>
      <div class="controls">
        <input type="text" style="padding-right: 30px;" id="address" name="address" placeholder="" class="input-xlarge" required>
        <p class="help-block">Please provide your address</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" style="padding-right: 30px;" id="password" name="password" placeholder="" class="input-xlarge" required >
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Password (Confirm)</label>
      <div class="controls">
        <input type="password"  style="padding-right: 30px;" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge" required>
        <p class="help-block">Please confirm password</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
         <button class="btn btn-success">Sign Up</button> 

         <div class="modal-footer">
          
            
          <p>Already a member ?
                  <a href="login.php" class="to_register"> Login </a>
                </p>
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        </div>

      </div>
    </div>
  </fieldset>
</form>
</div>
</div>








      </div>
    </div>

  </div>
</div>

</body>
</html>
