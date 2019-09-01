<?php 
  if (isset($_COOKIE['email']) and isset($_COOKIE['password']) )
  {
    $email=$_COOKIE['email'];
    $password=$_COOKIE['password'];
    //echo $email;
    echo "<script> document.getElementById('email').value ='$email';
             document.getElementById('password').value ='$password';
        </script> ";
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		login 
	</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="login.css">
  <script>
function validateForm() {
  var x = document.forms["login"]["uname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="#">Picture Pizels</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
      </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<form name="login" action="login1.php" method="POST"onsubmit="return validateForm()">
 
  <div class="container" style="width: 30%; margin: 25px auto;">
    	<label for="uname"><b>Username/Email</b></label>
	    <input type="text" placeholder="Enter Username" name="email" required>

	    <label for="psw"><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="password" required>

	    <button type="submit">Login</button>
	    <label>
	    <input type="checkbox" checked="checked" name="remember"> Remember me
	    </label>
    
 
   <div class="container" style="background-color:#f1f1f1"> 
  	<div class="container">
  		    <button type="button" class="cancelbtn">Cancel</button>
    		<span class="psw">Forgot <a href="#">password?</a></span>
  	</div>
  </div>

  </div>

</form>

</body>
</html>