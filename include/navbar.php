<nav class="navbar navbar-default">

	  <div class="container">
	    
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="home.php">Picture Pizels</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
	        <li class="active"><a href="home.php">Home</a></li>
	        <li><a href="#">About</a></li>
	        <li><a href="login.php">Upload</a></li>

	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	      	<?php  
	        if(isset($_SESSION['email']))
	      	{
               echo '<li><a href="#">Welcome </a></li>'.'<li><a>'.$_SESSION['email'] .'</a></li>' ;
               echo '<li><a href="logout.php">Logout <i class="fa fa-user"></i></a></li>';
               
	      		

	      	}
	      	else
	      	{
	      	echo'<li><a href="signup.php">Sign Up <i class="fa fa-user-plus"></i></a></li>';
	      	echo'<li><a href="login.php">Login <i class="fa fa-user"></i></a></li>';

	        
          	}
          	?>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>