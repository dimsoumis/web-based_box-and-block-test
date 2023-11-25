 <?php
session_start();
if(!isset($_SESSION['userActive'])){
   header("Location:https://");
}

?>

<html>
<head>
	<meta charset="utf-8">
		  <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
<title>Box & Block Test</title>
<link rel="icon" type="image/png" href="/images/favicon.png"/>
	
	<link rel="stylesheet" href="/styles/main.css">
	
  </head>
  
  <body class="saveScorePage">
	  <h1 style="text-align: center; margin-top: 50px;">Are you sure you want to save your score?</h1>
	  
	    <div class="row">
			 <div class="column1"><strong>Score</strong>: <div id="scoreAchieved"></div></div>
			 <div class="column1"><strong>Hand Used</strong>: Right</div>
	  </div>
	  
	  <div class="row">
		  
		  
		  <div class="column1">
		  <form action="submit-score.php" method="POST">
			  <input id="score" name="score" type="number" style="display: none;" /><br/><br/>

		  <input type="submit" value="Yes">
	  </form>
	  </div>
		  </div>
	  
	  <hr style="color: #fff;
height: 5px;
background: #fff;
margin: 40px 0px;">
	  
	   <div class="row">
		  <div class="column2">
	  <a href="index.php"><button>Play Again</button></a> 
			   </div>
		   	  <div class="column2">
	  <a href="../main.php"><button>Home Page</button></a> 
		   </div>
		  </div>
	  

		  <script type="text/javascript"> 
			  var userScore = localStorage.getItem("bbtRightScore");
			  document.getElementById("scoreAchieved").innerHTML = userScore;
  document.getElementById("score").setAttribute('value', userScore);
	  </script>
  </body>
</html>

 <?php

?>