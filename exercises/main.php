 <?php
session_start();
if(!isset($_SESSION['userActive'])){
   header("Location:https:///");
}

?>

<html>
	<head>
		<meta charset="utf-8">
		  <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
		<title>Web BBT - Hand Rehabilitation Platform</title>
	<link rel="icon" type="image/x-icon" href="/images/favicon.png">
		
	<link rel="stylesheet" href="/styles/main.css">
	</head>
	<body>
		
		<header>
			<img id="logo" src="/images/logo.png" />
		
<h1 style="text-align: center;">The Box & Block Test - Web Edition</h1>
			
			<a href="/logout.php"><button class="logOutButton">Log out</button></a>
		</header>
		
		<h1 style="text-align: center;">Welcome!</h1>
		
		<div class="row">
			<div class="column2"><a href="left-hand-bbt/index.php"><img src="/images/logo.png" /></a>
				<a href="left-hand-bbt/index.php"><h2 style="text-align: center;">Left Hand BBT</h2></a></div>
			<div class="column2"><a href="right-hand-bbt/index.php"><img src="/images/logo.png" style="-webkit-transform: scaleX(-1); transform: scaleX(-1);" /></a>
				<a href="right-hand-bbt/index.php"><h2 style="text-align: center;">Right Hand BBT</h2></a></div>
		</div>	
			
		<div class="row">
			<div class="column1"><a href="previous-scores.php"><button style="font-size: 30px;
  background: #fff;
  color: #597a9d;
  padding: 5px 10px;">Previous Scores</button></a>
</div>	
		</div>	
		
		
	</body>
</html>

<?php

?>