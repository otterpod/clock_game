<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="Proj_5.css">
  <?php include('errors.php'); ?> 
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<div class="input-group">
  	  <label>name</label>
  	  <input type="text" name="name">
	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email">
    	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  
  	<div class="input-group">
  	  <button type="submit" class="btn" name="regButt">Register</button>
  	</div>
  	<p>
  		Already signed up? <a href="login.php">Log in</a>
  	</p>
  </form>
</body>
</html>