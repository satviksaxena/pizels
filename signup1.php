<?php	
session_start();
$con=mysqli_connect('localhost','root','','pizels') or die("could not connect to db");
if(!$con)
{
	echo"error in connection";
}
else{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['pwd'];
$s= "Select * from user where email ='$email'";

$result= mysqli_query($con,$s);
$num=mysqli_num_rows($result);


if($num==1)
{
	echo "username already taken";
} 
else
{
	$reg="INSERT INTO user (name,email,password) values ('$name','$email','$password')";
	mysqli_query($con,$reg);
	if($reg)
	{
     header("Location:login.php");
	}
	else 
	{
		echo "error: ".$sql; 
	}
    
}

}

?>