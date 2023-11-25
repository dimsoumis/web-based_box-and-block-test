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

mysqli_set_charset($con, "utf8");



$username = $_POST['usernameLogin'];  
$password = $_POST['passwordLogin'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);
  $password = stripcslashes($password);
       $username = mysqli_real_escape_string($con, $username);  
      $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
               $_SESSION['userActive'] = $username;
			echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login Successful!');
    window.location.href='https:///exercises/main.php';
    </script>");  
        }  
        else{  
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login failed. Invalid Username or Password. Please try again.');
    window.history.back();
    </script>");  
        }     
    ?>  


