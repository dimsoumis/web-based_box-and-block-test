    <?php      

 session_start();

$servername = "localhost";
$username = "bbt_user";
$password = "";
$dbname = "bbt";
          
        $con = mysqli_connect($servername, $username, $password, $dbname);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  




$username = $_SESSION['userActive'];  
$score = $_POST['score'];  
      
        //to prevent from mysqli injection   
        $username = stripcslashes($username);    
        $username = mysqli_real_escape_string($con, $username);  
          
   
			
			$sql = "INSERT INTO scores (id, user, score, hand)
VALUES ('0', '$username', '$score', 'Left')";
			
			
			
if ($con->query($sql) === TRUE) {	
   echo ("<script LANGUAGE='JavaScript'>
    window.alert('Your Score has been saved!');
    window.location.href='https:///exercises/main.php';
    </script>");  
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}     
       


    ?>  




