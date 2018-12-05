/* Jacob Abell, Maria Peterson, Madeline Dietrich
	 Project 5
	 Clock Game
	 12/06/18 */
var secLeft;
var intervalID;
	 
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
