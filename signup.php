<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="signup.css">

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- <script type="text/javascript">
function validate(){
var name = document.forms["register"]["name"].value;
var email= document.forms["register"]["email"].value;
var password= document.forms["register"]["pwd"].value;
var pwd-repeat= document.forms["register"]["pwd-repeat"].value; 

var pass= \^[A-Z a-z 0-9]

if(name=""){
  windows.alert("enter the name ");
}

if(email=""){
  windows.alert("enter the email ");
}

if(pwd=""){
  windows.alert("enter the password ");
}

} 

</script> -->
<script>
 function validate()
    {
        var name = document.forms["loginform"]["username"].value;
        var password = document.forms["loginform"]["pword"].value;
        if (name=="" || password=="")
         {
            alert("Please fill all details");
            return false;
          }
          var namecheck = /^[a-zA-Z\s]+$/;
          if(!namecheck.test(name))
          {
            alert("Name must be in alphabets only");
            return false;
          }
            var re = /(?=.*\w+)(?=.*[!@#$%^&*()]+).{8,}/;
          if(!re.test(password))
            {
              alert("Your password should be atleast 8 charecters long with atleast a symbol,uppercase and lowercase letters and a number");
              return false;
            }
         alert("Login Successful");
  }
  function myFunc2()
  {
     if(validate())
    alert("Login Successful");
    return false;
  }
</script>

</head>
<body>

<nav class="navbar navbar-default">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Picture Pizels</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="signup.php">Sign Up <i class="fa fa-user-plus"></i></a></li>
          <li><a href="login.php">Login <i class="fa fa-user"></i></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>

<div class="container">
    <form action="signup1.php" method="post">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Your Name" name="name" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
        
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pwd-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
</div>
</body>
</html>
