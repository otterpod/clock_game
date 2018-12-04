<!-- Jacob Abell, Maria Peterson, Madeline Dietrich
	 Project 5
	 Clock Game
	 12/06/18 -->
	 
<!DOCTYPE html>
<html lang = "en">
	<header>
		<title>Let's Play the Clock Game!</title>
		<link rel = "stylesheet" type = "text/css" href = "Proj_5.css">
	</header>
	
	<body>
		<div class = "heading">
			<h1>The Clock Game</h1>
		</div>
		<div id = "buttons">
			<button class = "btn">GET PRIZE</button> <button class = "btn">START THE CLOCK</button>
		</div>
		<div id = "timer">
			<!--this is for the timer to go when the game starts-->
			<p>Your Time - 00:00</p>
		</div>
		<div class = "input-group">
			<h2 class = "label">Put your guess in here!</h2>
			<input name = "guess" type = "number" step = "1" min = "0" pattern = "\d+"/> <!--javascript-->
		</div>
		<div id = "buttons">
			<button class = "btn">ENTER</button> <button class = "btn">PLAY AGAIN</button>
		</div>
		<div id = "output">
			<textarea id = "outputBox" type = "text" readonly></textarea>
		</div>
		<div id = "buttons">
			<button class = "btn" onclick = "location.href = 'stats.html'" type = "button">GO TO STATS</button>
		</div>
		
	</body>
</html>
