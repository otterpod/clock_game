<?php
    include('userAuthenticator.php');
	$auth = new userAuthenticator();
   /* if (isset($_POST['Login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $auth->authenticate($email, $password);
        
    }*/
	
	
		
?>

<!DOCTYPE html>
<html>
    <head>
      <title>Login Page</title>
      <link rel="stylesheet" type="text/css" href="Proj_5.css">
    </head>
    <body>
      <div class="header">
        <h2>Log In</h2>
      </div>
        
      <form name = "login" id = "login" method = "post">
        <div class="input-group">
          <label>Email</label>
          <input type="text" name="email" />
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="password" name="password"/ >
        </div>
        <div class="input-group">
          <button type = 'submit' name = 'Login' value = 'Login' class = "btn">Login</button>
        </div>
		<?php
		
		$auth->logUserIn();
		?>
        <p>
            Not signed up yet? <a href="register.php">Register Here</a>
        </p>
      </form>
    </body>
</html>