<html>
	<head>
		<meta charset="utf-8">
		  <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
		<title>Web BBT - Hand Rehabilitation Platform</title>
		<link rel="icon" type="image/x-icon" href="/images/favicon.png">
		
		<link rel="stylesheet" href="/styles/main.css">
	</head>
	<body>
		<p style="text-align: center;"><img src="/images/logo.png" style="width: 350px; max-width: 100%;" /></p>
		
<h1 style="text-align: center;">The Box & Block Test - Web Edition<br>Login</h1>
		
		 <div class="row1">
			 <form action="login.php" onsubmit="return validation()" method="POST">
			 <div class="column1"><input id="usernameLogin" name="usernameLogin" type="text" placeholder="Username"></div>
  <div class="column1"><input id="passwordLogin" name="passwordLogin" type="password" placeholder="Password"></div>
			   <div class="column1"><input type="submit" value="Submit"></div>
			 </form>
</div> 
		
		 <div class="row1">
			 <div class="column1"><p style="text-align: center;">Don't have an account?<br/>
				 <a href="register.html">Register</a></p></div>
</div> 
		
	
		
		 <script>  
            function validation()  
            {  
                var pUserName=document.getElementById("usernameLogin").value;  
                var pPassWord=document.getElementById("passwordLogin").value;  
                if(pUserName.length == "" && pPassWord.length == "") {  
                    alert("Username and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(pUserName.length == "") {  
                        alert("Username field is empty");  
                        return false;  
                    }   
                    if (pPassWord.length == "") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
	</body>
	</html>