 <?php
session_start();
if(!isset($_SESSION['userActive'])){
   header("Location:https:///");
}


$servername = "localhost";
$username = "bbt_user";
$password = "";
$dbname = "bbt";

          
        $con = mysqli_connect($servername, $username, $password, $dbname);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  

$user = $_SESSION['userActive'];  
      
        //to prevent from mysqli injection  
        $user = stripcslashes($user);    
        $user = mysqli_real_escape_string($con, $user); 


 $sql1 = "select * from scores where user = '$user'";  
        $result1 = mysqli_query($con, $sql1);  
        $count1 = mysqli_num_rows($result1);

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
		
		<h1 style="text-align: center;">Previous Scores</h1>
		
		<div class="row">
			<div class="column1">
				
				
					<?php if($count1 > 0) {
	
	echo "<table>
					<tr>
						<th>Score</th>
					<th>Hand</th>
						<th>Date</th>
					</tr>";
		while($row1 = mysqli_fetch_array($result1))
{
					echo "<tr><td>";
				echo $row1['score'];
			echo "</td><td>";
				echo $row1['hand'];
	echo "</td><td>";	
			
$dateOfX=$row1['reg_date'];
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
			
		<div class="row">
			<div class="column1"><a href="main.php"><button style="font-size: 30px;
  background: #fff;
  color: #597a9d;
  padding: 5px 10px;">Back to Home Page</button></a>
</div>	
		</div>	
		
		
	</body>
</html>

<?php

mysqli_close($con);

?>