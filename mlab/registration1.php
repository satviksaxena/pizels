<?php 
session_start();
$con=mysqli_connect('localhost','root','','lab') or die("could not connect to db");
if(!$con)
{
	echo 'error connecting to database';
}
else
{
$name= $_POST['name'];
$username= $_POST['username'];
$email=$_POST['email'];
$password= $_POST['password'];
//$con_password= $_POST['con_password'];

$s="SELECT * FROM user WHERE username='$username' and password='$password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1)
{
	echo 'username already taken';
}
else
{
 	$query="INSERT INTO user (name,username,email,password) VALUES ('$name','$username','$email','$password')";
 	mysqli_query($con,$query);
 	if($query)
 	{
           header("Location:login.php");
 	}
 	else 
 	{
 		echo 'error';
 	}
}


}

 ?>