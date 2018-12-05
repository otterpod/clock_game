/* Jacob Abell, Maria Peterson, Madeline Dietrich
	 Project 5
	 Clock Game
	 12/06/18 */
	 
window.onload;


var timer = 30;
var elem = document.getElementById('timer');

var timeID = setInterval(countDown, 1000);
	
function countDown()
{
	if(timer == 0)
	{
		clearTimeout(timeID);
		alert("Time is out! Game over!");
	}
	
	else
	{
		elem.innerHTML = timer + ' seconds left!';
		timer--;
	}
}