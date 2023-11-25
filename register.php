 <?php

$servername = "localhost";
$username = "bbt_user";
$password = "";
$dbname = "bbt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

mysqli_set_charset($conn, "utf8");

$registrantName = $_POST['nameRegister'];
$registrantEmail = $_POST['emailRegister'];
$registrantUsername = $_POST['usernameRegister'];
$registrantPassword = $_POST['passwordRegister'];
$registrantAge = $_POST['ageRegister'];
$registrantGender = $_POST['genderRegister'];
$registrantDominantHand = $_POST['dominantHandRegister'];
$registrantStatus = $_POST['statusRegister'];


if (empty($registrantUsername) OR empty($registrantPassword) OR empty($registrantAge) OR empty($registrantGender) OR empty($registrantDominantHand) OR empty($registrantStatus)) {	
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Try again, there were empty necessary fields');
    window.history.back();
    </script>");
} else {
	
	
	if (!empty($registrantEmail)) {
	if (filter_var($registrantEmail, FILTER_VALIDATE_EMAIL)) {
		
		$select = mysqli_query($conn, "SELECT * FROM users WHERE username = '".$registrantUsername."'");
if(mysqli_num_rows($select)) {	
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('This username is already used!');
    window.history.back();
    </script>");
} else {
				
		if (preg_match('/\s/', $registrantPassword)) {
				echo ("<script LANGUAGE='JavaScript'>
    window.alert('The password cannot contain whitespaces');
    window.history.back();
    </script>");
} else {

    if (strlen($registrantPassword) < '8') {
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('The password must be at least 8 characters long');
    window.history.back();
    </script>");
	}
		else {
	$sql = "INSERT INTO users (id, name, email, username, password, age, gender, hand, status)
VALUES ('0', '$registrantName', '$registrantEmail', '$registrantUsername', '$registrantPassword', '$registrantAge', '$registrantGender', '$registrantDominantHand', '$registrantStatus')";


if ($conn->query($sql) === TRUE) {	
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('New record created successfully! You can now log in to the system!');
    window.location.href='https://bbt.goodcause.gr/index.php';
    </script>");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
	}
	}
	}
else {	
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Invalid email address');
    window.history.back();
    </script>");
} 
	} else {
	
		
		
			$select = mysqli_query($conn, "SELECT * FROM users WHERE username = '".$registrantUsername."'");
if(mysqli_num_rows($select)) {	
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('This username is already used!');
    window.history.back();
    </script>");
} else {
				
		if (preg_match('/\s/', $registrantPassword)) {
				echo ("<script LANGUAGE='JavaScript'>
    window.alert('The password cannot contain whitespaces');
    window.history.back();
    </script>");
} else {

    if (strlen($registrantPassword) < '8') {
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('The password must be at least 8 characters long');
    window.history.back();
    </script>");
	}
		else {
		$sql = "INSERT INTO users (id, name, email, username, password, age, gender, hand, status)
VALUES ('0', '$registrantName', '$registrantEmail', '$registrantUsername', '$registrantPassword', '$registrantAge', '$registrantGender', '$registrantDominantHand', '$registrantStatus')";


if ($conn->query($sql) === TRUE) {	
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('New record created successfully! You can now log in to the system!');
    window.location.href='https://';
    </script>");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
	}
	}
		
		
	}
	
}


$conn->close(); 
?> 





