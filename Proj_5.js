/* Jacob Abell, Maria Peterson, Madeline Dietrich
	 Project 5
	 Clock Game
	 12/06/18 */
var secLeft;
var intervalID;
var enabled = true;
	 
window.onload = function()
{
	//it's as empty as the void in our hearts
	
};
	
function startClock()
{
	secLeft = 30;
	var intervalID = setInterval(countDown, 1000);
	
	countDown();
}
	
function countDown()
{
	if(enabled == true)
	{
		var elem = document.getElementById('timer');

		if(secLeft == -1)
		{
			alert("Time is out! Game over!");
			clearTimeout(intervalID);	
		}

		else
		{
			elem.innerHTML = secLeft + ' seconds left!';
			secLeft--;
		}
	}
}

function youWon()
{
	clearTimeout (intervalID);
	alert("You Won!");
	enabled = false;
}

$(document).ready(function(){
    $("button").click(function(){
        $.get("play.php", function(guess){
            alert(guess);
        });
    });
});

function ComparePrice()
	{
	if(input.value==rand)
	{
	youWon();
	}
	else if(input.value>rand)
	{
	alert("lower");
	}
	else if(input.value<rand)
	{
	alert("higher");
	}
	}
