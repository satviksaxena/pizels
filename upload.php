<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>

		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

	<?php 
            require"include/navbar.php";
	 ?>
 	<div class="container">

 	<form action="upload1.php" method="POST" enctype"multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Category</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="label">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
  </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>

 	</div>
</body>
</html>