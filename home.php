<?php 
session_start();
//session_destroy();
 ?>
<!DOCTYPE html>
<html>
<head>
	<head>
		<title>Picture Pizels</title>
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="home.css">

		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
<body>

	<?php 
            require"include/navbar.php";
	 ?>

<div class="container">
		<div class="jumbotron">
			<h1><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Picture Pizels</h1>
			<?php  
	        if(isset($_SESSION['email']))
	      	{
	      		 echo'<p><a class="btn btn-primary btn-lg" href="upload.php" role="button">Upload</a></p>';
	      	}
            ?>
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</div>



		<div class="col-lg-4 col-sm-6">
			<div class="thumbnail">
				 <img src="landscape.jpg">
				 <a href="landscape.php">Landscape</a>
			</div>
		</div>

		<div class="col-lg-4 col-sm-6">
			<div class="thumbnail">
				<img src="abstract.jpg">
				<a href="abstract.php">Abstract</a>
			</div>
		</div>

		<div class="col-lg-4 col-sm-6">
			<div class="thumbnail">
				<img src="people.jpg">
				<a href="people.php">People</a>
			</div>
		</div>

		<div class="col-lg-4 col-sm-6">
	        <div class="thumbnail">
	        	<img src="https://images.unsplash.com/photo-1439694458393-78ecf14da7f9?dpr=2&fit=crop&fm=jpg&h=825&q=50&w=1450">
	        </div>
	     </div>

	    <div class="col-lg-4 col-sm-6">
	        <div class="thumbnail">
	        	<img src="https://images.unsplash.com/photo-1439524970634-649c37a69e5c?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1450&h=825&fit=crop&s=bfda9916c885869b43b70738693428d9">
	        </div>
	     </div>

	    <div class="col-lg-4 col-sm-6">
	        <div class="thumbnail">
	        	<img src="https://images.unsplash.com/photo-1444090542259-0af8fa96557e?dpr=2&fit=crop&fm=jpg&h=825&q=50&w=1450">
	        </div>
	    </div>

	    <div class="col-lg-4 col-sm-6">
	        <div class="thumbnail">
	        	<img src="https://images.unsplash.com/photo-1434543177303-ef2cc7707e0d?dpr=2&fit=crop&fm=jpg&h=825&q=50&w=1450">
	        </div>
	    </div>

	    <div class="col-lg-4 col-sm-6">
	        <div class="thumbnail">
	        	<img src="https://images.unsplash.com/photo-1436262513933-a0b06755c784?dpr=2&fit=crop&fm=jpg&h=825&q=50&w=1450">
	        </div>
	    </div>

	    <div class="col-lg-4 col-sm-6">
	        <div class="thumbnail">
	        	<img src="https://images.unsplash.com/photo-1439396087961-98bc12c21176?dpr=2&fit=crop&fm=jpg&h=825&q=50&w=1450">
	        </div>
	    </div>

	</div>



</body>
</html>
