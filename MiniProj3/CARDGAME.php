


<?php include 'loggedin.php';?>

<?php 

	session_start();
	if (isset($_SESSION['username'])){
		echo "Welcome Back, ".$_SESSION['username'] ; 
	}
	 ?> 


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Gemstones</title>
  </head>
  <body>
    <h1 class="page-title">Gemstones Card Game</h1>
    <div id ="jnk1">
      <span id ="pnts">Points: 00</span>
      <span id="tm">Time | <label id="hours">00</label>:<label id="mins">00</label>:<label id="secs">00</label></span>
	  
	  
	  
	  
      <script>
        var hoursL = document.getElementById("hours");
        var minsL = document.getElementById("mins");
        var secsL = document.getElementById("secs");
        var totalsecs = 0;
        var totalmins = 0; 
        setInterval(timer, 1000);
        
        function convert(times){
            var string = times + "";
            if(string.length < 2) {
              return "0" + string;
            }
            else {
              return string;
            }   
        }

        function timer(){
          ++totalsecs;
          secsL.innerHTML = convert(totalsecs%60);
            
          if (totalsecs == 59) {
            ++totalmins; 
            minsL.innerHTML =convert(totalmins%60);
          }
        }
      </script>
    </div>
    <br>
    <div class="game-container">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
          </div>

          <div class="flip-card-back">
            <h1>card1</h1> 
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
          </div>

          <div class="flip-card-back">
            <h1>card2</h1> 
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
          </div>

          <div class="flip-card-back">
            <h1>card3</h1> 
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
          </div>

          <div class="flip-card-back">
            <h1>card1</h1> 
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
          </div>

          <div class="flip-card-back">
            <h1>card2</h1> 
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
          </div>

          <div class="flip-card-back">
            <h1>card3</h1> 
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
          </div>

          <div class="flip-card-back">
            <h1>card1</h1> 
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
          </div>

          <div class="flip-card-back">
            <h1>card1</h1> 
          </div>
        </div>
      </div>
    </div>
    <div id="tempLink"><a href="score_page.html">To Score</a></div>
  </body>
</html>
