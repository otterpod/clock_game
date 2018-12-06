<!-- Jacob Abell, Maria Peterson, Madeline Dietrich
	 Project 5
	 Clock Game
	 12/06/18 -->
	 
<!DOCTYPE html>
<html lang = "en">
	<header>
		<title>Let's Play the Clock Game!</title>
		<link rel = "stylesheet" type = "text/css" href = "Proj_5.css">
		<script src = "Proj_5.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	</header>
	
	<body>
		<?php
			$user = 'csc390_fa18_abel';
			$pass = 'T9PrGWAjpTD4Jqwy';	
			$dbh = new PDO('mysql:host=localhost;dbname=csc390_fa18_abel', $user, $pass);
			$sql = 'SELECT * FROM prize order by RAND() limit 1 '; //pull this from database
			$query = $dbh->prepare($sql);  //prepare
			$query->execute();			   //execute
			// Get the results! This will return one row. If no row was found for the ID they gave we will get false.
			$row = $query->fetch(PDO::FETCH_ASSOC);

			// Getting values out of the data structure returned by the database.
			$name = $row['title'];
			$description = $row['description'];
			$min_price = $row['min_price'];
			$max_price = $row['max_price'];
			$url = $row['image_url'];
			$RandPrice=rand($min_price,$max_price);
		?>
		<img><?php"$url"?></img>
		<div class = "heading">
			<h1>The Clock Game</h1>
		</div>
		<div id = "buttons">
			<button class = "btn" id = "getPrize">GET PRIZE</button> 
			<button class = "btn" id = "clockStart" onclick = startClock();>START THE CLOCK</button>
		</div>
		
		<div id = "timer">
			<p>You have 30 seconds to guess the price! Click "START THE CLOCK" to begin!</p>
		</div>
		<div class = "input-group">
			<h2 class = "label">Put your guess in here!</h2>
			<form name = "guess" id = "guess" method = "post">
				<input name = "guess" type = "number" step = "1" min = "0" pattern = "\d+"/>
			</form>
		</div>
		<div id = "buttons">
			<button class = "btn" id = "enter">ENTER</button> <button class = "btn" id = "replay" onclick = "location.href = 'play.php'">PLAY AGAIN</button>
		</div>
		<div id = "output">
			<textarea id = "outputBox" type = "text" readonly></textarea>
		</div>
		<div id = "buttons">
			<button class = "btn" onclick = "location.href = 'stats.php'" type = "button">GO TO STATS</button>
		</div>
		
		<script> //AJAX
		$(document).ready(function(){
			$("#clockStart").click(function(){
				$("#clockStart").hide();
			});
			
			
		});
		
		</script>
	</body>
</html>

