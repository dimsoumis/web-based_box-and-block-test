 <?php

$servername = "localhost";
$username = "bbt_user";
$password = "";
$dbname = "bbt";

          
        $con = mysqli_connect($servername, $username, $password, $dbname);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  



 $sql = "select * from scores";  
        $result = mysqli_query($con, $sql);  
        $count = mysqli_num_rows($result);

 $sql1 = "select * from users";  
        $result1 = mysqli_query($con, $sql1);  
        $count1 = mysqli_num_rows($result1);

 $sqlForStats = "select * from scores";  
        $resultForStats = mysqli_query($con, $sqlForStats);  
        $countForStats = mysqli_num_rows($resultForStats);


$sqlForHealthyStats = "SELECT * FROM scores WHERE user IN (SELECT username FROM users WHERE status = 'healthy')";
$resultForHealthyStats = mysqli_query($con, $sqlForHealthyStats);  
$countForHealthyStats = mysqli_num_rows($resultForHealthyStats);

$sqlForPatientsStats = "SELECT * FROM scores WHERE user IN (SELECT username FROM users WHERE status = 'patient')";
$resultForPatientsStats = mysqli_query($con, $sqlForPatientsStats);  
$countForPatientsStats = mysqli_num_rows($resultForPatientsStats);












$maxScoreRight = 0;
	$maxScoreLeft = 0;
	$minScoreRight = 1000;
	$minScoreLeft = 1000;
	$averageScoreRight = 0;
	$averageScoreLeft = 0;
$rightScoresCounter = 0;
$leftScoresCounter = 0;
	
		while($row = mysqli_fetch_array($resultForStats)) {
		
			$actualScore = $row['score'];
			$actualHand = $row['hand'];
			
			
			if ($actualHand == "Right") {
				if ($actualScore > $maxScoreRight) {
					$maxScoreRight = $actualScore;
				}
				
				$averageScoreRight = $averageScoreRight + $actualScore;
				$rightScoresCounter++;
				
			} else {
			if ($actualScore > $maxScoreLeft) {
					$maxScoreLeft = $actualScore;
				}	
				
				$averageScoreLeft = $averageScoreLeft + $actualScore;
				$leftScoresCounter++;
					
			}
		
		
			if ($actualHand == "Right") {
				if ($actualScore < $minScoreRight) {
					$minScoreRight = $actualScore;
				}
			} else {
			if ($actualScore < $minScoreLeft) {
					$minScoreLeft = $actualScore;
				}	
			}
		
		
		}
			
			$averageScoreRight = $averageScoreRight / $rightScoresCounter;
				$averageScoreLeft = $averageScoreLeft / $leftScoresCounter;
			
if ($minScoreRight == 1000) {
	$minScoreRight = 0;
}
	if ($minScoreLeft == 1000) {
	$minScoreLeft = 0;
}















	$maxScoreRightHealthy = 0;
	$maxScoreLeftHealthy = 0;
	$minScoreRightHealthy = 1000;
	$minScoreLeftHealthy = 1000;
	$averageScoreRightHealthy = 0;
	$averageScoreLeftHealthy = 0;
$rightScoresCounterHealthy = 0;
$leftScoresCounterHealthy = 0;
	
		while($row = mysqli_fetch_array($resultForHealthyStats)) {
		
			$actualScoreHealthy = $row['score'];
			$actualHandHealthy = $row['hand'];
			
			
			if ($actualHandHealthy == "Right") {
				if ($actualScoreHealthy > $maxScoreRightHealthy) {
					$maxScoreRightHealthy = $actualScoreHealthy;
				}
				
				$averageScoreRightHealthy = $averageScoreRightHealthy + $actualScoreHealthy;
				$rightScoresCounterHealthy++;
				
			} else {
			if ($actualScoreHealthy > $maxScoreLeftHealthy) {
					$maxScoreLeftHealthy = $actualScoreHealthy;
				}	
				
				$averageScoreLeftHealthy = $averageScoreLeftHealthy + $actualScoreHealthy;
				$leftScoresCounterHealthy++;
					
			}
		
		
			if ($actualHandHealthy == "Right") {
				if ($actualScoreHealthy < $minScoreRightHealthy) {
					$minScoreRightHealthy = $actualScoreHealthy;
				}
			} else {
			if ($actualScoreHealthy < $minScoreLeftHealthy) {
					$minScoreLeftHealthy = $actualScoreHealthy;
				}	
			}
		
		
		}
			
			$averageScoreRightHealthy = $averageScoreRightHealthy / $rightScoresCounterHealthy;
				$averageScoreLeftHealthy = $averageScoreLeftHealthy / $leftScoresCounterHealthy;
			
if ($minScoreRightHealthy == 1000) {
	$minScoreRightHealthy = 0;
}
	if ($minScoreLeftHealthy == 1000) {
	$minScoreLeftHealthy = 0;
}





















	$maxScoreRightPatients = 0;
	$maxScoreLeftPatients = 0;
	$minScoreRightPatients = 1000;
	$minScoreLeftPatients = 1000;
	$averageScoreRightPatients = 0;
	$averageScoreLeftPatients = 0;
$rightScoresCounterPatients = 0;
$leftScoresCounterPatients = 0;
	
		while($row = mysqli_fetch_array($resultForPatientsStats)) {
		
			$actualScorePatients = $row['score'];
			$actualHandPatients = $row['hand'];
			
			
			if ($actualHandPatients == "Right") {
				if ($actualScorePatients > $maxScoreRightPatients) {
					$maxScoreRightPatients = $actualScorePatients;
				}
				
				$averageScoreRightPatients = $averageScoreRightPatients + $actualScorePatients;
				$rightScoresCounterPatients++;
				
			} else {
			if ($actualScorePatients > $maxScoreLeftPatients) {
					$maxScoreLeftPatients = $actualScorePatients;
				}	
				
				$averageScoreLeftPatients = $averageScoreLeftPatients + $actualScorePatients;
				$leftScoresCounterPatients++;
					
			}
		
		
			if ($actualHandPatients == "Right") {
				if ($actualScorePatients < $minScoreRightPatients) {
					$minScoreRightPatients = $actualScorePatients;
				}
			} else {
			if ($actualScorePatients < $minScoreLeftPatients) {
					$minScoreLeftPatients = $actualScorePatients;
				}	
			}
		
		
		}
			
			$averageScoreRightPatients = $averageScoreRightPatients / $rightScoresCounterPatients;
				$averageScoreLeftPatients = $averageScoreLeftPatients / $leftScoresCounterPatients;
			
if ($minScoreRightPatients == 1000) {
	$minScoreRightPatients = 0;
}
	if ($minScoreLeftPatients == 1000) {
	$minScoreLeftPatients = 0;
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
			
		</header>
		
		
		
		
		<div class="row">
			<div class="column1">
				<h1 style="text-align: center;">Statistics</h1>
				
				<h3 style="text-align: center;">General</h3>
				<?php if($count > 0) {
		echo "<table>
					<tr>
						<th>Max Score (Right)</th>
		<th>Max Score (Left)</th>
		<th>Min Score (Right)</th>
		<th>Min Score (Left)</th>
			<th>Average Score (Right)</th>
		<th>Average Score (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $maxScoreRight;
			
			echo "</td><td>";
			
			echo $maxScoreLeft;
			
			echo "</td><td>";
			
			echo $minScoreRight;
			
			echo "</td><td>";
			
			echo $minScoreLeft;
			
			echo "</td><td>";
			
			echo $averageScoreRight;
			
			echo "</td><td>";
			
			echo $averageScoreLeft;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p>There are no scores saved yet.</p>";		
}
				?>
				
				
				
					<h3 style="text-align: center;">Healthy</h3>
				
				<?php if($countForHealthyStats > 0) {
		echo "<table>
					<tr>
						<th>Max Score (Right)</th>
		<th>Max Score (Left)</th>
		<th>Min Score (Right)</th>
		<th>Min Score (Left)</th>
			<th>Average Score (Right)</th>
		<th>Average Score (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $maxScoreRightHealthy;
			
			echo "</td><td>";
			
			echo $maxScoreLeftHealthy;
			
			echo "</td><td>";
			
			echo $minScoreRightHealthy;
			
			echo "</td><td>";
			
			echo $minScoreLeftHealthy;
			
			echo "</td><td>";
			
			echo $averageScoreRightHealthy;
			
			echo "</td><td>";
			
			echo $averageScoreLeftHealthy;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p style='text-align: center;'>There are no scores saved yet.</p>";		
}
				?>
				
	
	<h3 style="text-align: center;">Patients</h3>
				
							<?php if($countForPatientsStats > 0) {
		echo "<table>
					<tr>
						<th>Max Score (Right)</th>
		<th>Max Score (Left)</th>
		<th>Min Score (Right)</th>
		<th>Min Score (Left)</th>
			<th>Average Score (Right)</th>
		<th>Average Score (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $maxScoreRightPatients;
			
			echo "</td><td>";
			
			echo $maxScoreLeftPatients;
			
			echo "</td><td>";
			
			echo $minScoreRightPatients;
			
			echo "</td><td>";
			
			echo $minScoreLeftPatients;
			
			echo "</td><td>";
			
			echo $averageScoreRightPatients;
			
			echo "</td><td>";
			
			echo $averageScoreLeftPatients;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p style='text-align: center;'>There are no scores saved yet.</p>";		
}
				?>
				
			</div>
		</div>
		<div class="row">
			<div class="column1">
				<h1 style="text-align: center;">Users' Scores</h1>
				
					<?php if($count > 0) {
	
	echo "<table>
					<tr>
						<th>Score</th>
					<th>Exercise Hand</th>
					<th>Dominant Hand</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Status</th>
						<th>Date</th>
					</tr>";
		while($row = mysqli_fetch_array($result))
{
					echo "<tr><td>";
				echo $row['score'];
			echo "</td><td>";
				echo $row['hand'];
	echo "</td><td>";	
			
			$defineUser = $row['user'];
		 $sqlInLoop = "select * from users where username = '$defineUser'";  
        $resultInLoop = mysqli_query($con, $sqlInLoop);  
        $countInLoop = mysqli_num_rows($resultInLoop);	
			
				while($rowInLoop = mysqli_fetch_array($resultInLoop)) {
			echo $rowInLoop['hand'];
					echo "</td><td>";	
					echo $rowInLoop['age'];
					echo "</td><td>";	
					echo $rowInLoop['gender'];
					echo "</td><td>";	
					echo $rowInLoop['status'];
					echo "</td><td>";	
					
				}
			
$dateOfX=$row['reg_date'];
echo date('H:i / d-m-Y', strtotime($dateOfX));
			
	echo "</td></tr>";
				}
	echo "</table>";
	} else {
		echo "<p>There are no scores saved yet.</p>";		
}
				?>
			</div>
			
			
			
		
		</div>	
			
		
		
		
	</body>
</html>

<?php

mysqli_close($con);

?>