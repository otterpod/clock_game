<?php

class userAuthenticator
{	
	public function isLoggedIn() 
	{
		if(isset($_SESSION['email'])) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function authenticate($email, $password)//if the username & pass match what's in the database for the email, then log in
	{
    $user = 'root';
    $pass = '';
    $dbh = new PDO('mysql:host=localhost;dbname=csc390_fa18_pete', $user, $pass);
    
    $password = md5($password);
    
    $sql = 'SELECT * FROM user WHERE (email = :email AND password = :password)';
    $query = $dbh->prepare($sql);
	$query->bindParam(':email', $email);
    $query->bindParam(':password', $password);
    $query->execute();
    $emailPass = $query->fetch(PDO::FETCH_ASSOC);
	if($emailPass == true)
		logUserIn($email);
	else
		$this->redirectToLogin();
  }

	public function registered($email)//check if they're already in the database
	{
		$user = 'root';
        $pass = '';
        $dbh = new PDO('mysql:host=localhost;dbname=csc390_fa18_pete', $user, $pass);
		$checkemail = $_POST['email'];
		$sql = 'SELECT email FROM user WHERE email = :email';
		$query = $dbh->prepare($sql);
		$query->bindParam(':email', $email);
		$query->execute();

		$emails = $query->fetch(PDO::FETCH_ASSOC);
		if($checkemail == $emails['email'])
			echo "is logged in";
		
		
		if($query == true)//meaning if the query returns something, since true = 1
		{
			echo "You are already registered!";
			return true;
		}
		
		else
		{
			return false;
		}
	}

	public function logUserIn()
	{
		//session_start();
		$user = 'root'; 
		$pass = '';
		$dbh = new PDO('mysql:host=localhost;dbname=csc390_fa18_pete', $user, $pass); 
		if(isset($_POST['email']) && isset($_POST['password'])){
			$_SESSION['email'] = $_POST['email'];
			$myEmail = $_SESSION['email'];
			
			$sql = 'SELECT email FROM user WHERE email = :email';
			$query = $dbh->prepare($sql);
			$query->bindParam(':email',$myEmail);
			$query->execute();
			$userEmail = $query->fetch(PDO::FETCH_ASSOC);
			if($userEmail['email'] == $myEmail)
				header("Location: index.php");
		}
		
		
	}
	
	public function logout()//
	{
		session_destroy();
		session_regenerate_id(true);
		redirectToLogin();
	}
	
	public function redirectToLogin()
	{
		header('location: login.php');
	}
}
?>