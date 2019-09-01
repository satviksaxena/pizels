<?php 
$con=mysqli_connect('localhost','root','','pizels') or die("could not connect to db");

if(!$con)
{
	echo"error in connection";
}
else{

$email=$_POST['email'];
$password=$_POST['password'];
$remember=$_POST['remember'];

$s= "Select * from user where email ='$email' and password ='$password'";
$result= mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1)
{ 
	session_start();
  $_SESSION['email']=$email;
  $_SESSION['Status']="Session Status: Login Success!!!";
  
  if(isset($_POST['remember']))
  {
  	setcookie('email','$email',time()+60*60*7);
  	setcookie('password','$password',time()+60*60*7);
  }

  header('location:home.php');

}

else{
	echo $num;
	header('location:signup.php');
	}


}


 ?>