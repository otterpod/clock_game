$(document).ready(function(){
    $("button").click(function(){
        $.get("play.php", function(guess){
            alert(guess);
        });
    });
});
