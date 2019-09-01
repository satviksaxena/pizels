<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
   <h1>Register here </h1>
   <div class="container">
   	<div class="rlform">
   		<form name="registration"action="registration1.php" method="POST">
         	<div>
         		<b>Name</b>	
         		<input type="text" name="name" placeholder="Enter your name" required>
            </div><br>  
            <div>
               <b>Username</b> 
               <input type="text" name="username" placeholder="Choose a username" required>
            </div><br>  

            <div>
         		<b>Email</b>	
         		<input type="email" name="email" placeholder="Enter your email" required>
            </div><br>  
            <div>
         		<b>Password</b>	
         		<input type="password" name="password" placeholder="Enter password" required>
            </div><br>  
            <div>
         		<b>Confirm password</b>	
         		<input type="password" name="con_password" placeholder="Retype password" required>
            </div><br>  
            <div>
            	<button type="submit" class="registerbtn">Signup</button>
            </div><br>       
   
   		</form>
   		
   	</div>




</body>
</html>