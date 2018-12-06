<!-- Jacob Abell, Maria Peterson, Madeline Dietrich
	 Project 5
	 Clock Game
	 12/06/18 -->
<?php
	session_start();
?>
	 
<!DOCTYPE html>
<html lang = "en">
	<header>
		<title>Let's Play the Clock Game!</title>
		<link rel = "stylesheet" type = "text/css" href = "Proj_5.css">
		<script src = "Proj_5.js"></script>
	</header>
	
	<body>
		<div class = "heading">
			<h1>The Clock Game</h1>
		</div>
		<div id = "buttons">
			<button class = "btn" id = "getPrize">GET PRIZE</button> <button class = "btn" onclick = startClock();>START THE CLOCK</button>
		</div>
		<p id="temp"></p> 
		<script type="text/javascript">
		//testing ajax below
		$(play.php).ready(function(){
			$(document).click(function(){
				$.ajax({
				type: 'POST',
				url: 'play.php',
				success: function(data){
					alert(data);
					$("p").text(data)
					}
				});
			});
		});

		</script>
		<div id = "timer">
			<p>You have 30 seconds to guess the price! Click "START THE CLOCK" to begin!</p>
		</div>
		<div class = "input-group">
			<h2 class = "label">Put your guess in here!</h2>
			<input name = "guess" type = "number" step = "1" min = "0" pattern = "\d+"/> <!--javascript-->
		</div>
		<div id = "buttons">
			<button class = "btn" id = "enter">ENTER</button> <button class = "btn" id = "replay" onclick = "location.href = 'index.php'">PLAY AGAIN</button>
		</div>
		<div id = "output">
			<textarea id = "outputBox" type = "text" readonly></textarea>
		</div>
		<div id = "buttons">
			<button class = "btn" onclick = "location.href = 'stats.php'" type = "button">GO TO STATS</button>
		</div>
		
	</body>
</html>