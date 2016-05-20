<?php include("loginController.php"); ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Information</title>

    <!-- Bootstrap -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
   <style>
   
   		.navbar-brand{
   			font-size:1.8em;
   			
   		}
   		
   		#topContainer{
   			background-image:url("background.jpg");
   			height:400px;
   			width:100%;
   			background-size:cover;	
   		}
   		
   		#topRow {
   			margin-top:100px;
   			text-align:center;	
   		}
   
   		#topRow h1{
   			font-size:300%;
   
   		}
   		
   		.bold{
   			font-weight:bold;
   		}
   
   		.marginTop{
   			margin-top:30px;
   		
   		}
   		
   		.center{
   			text-align:center;
   		
   		}
   		
   		.title {
   			margin-top:100px;
   			font-size:300%;
   			
   		}
   		
   		#footer{
   			background-color: #B0D1FB;
   			padding-top:70px;
   			width:100%;
   		}
   		
   		,marginBottom{
   			margin-bottom:30px;
   			
   		}
   		
   		.appstoreImage{
   			width:250px;
   		
   		}
   </style>
    
  </head>
  
<body data-spy="scroll" data-target=".navbar-collapse">

  <div class="navbar navbar-default navbar-fixed-top">
  
  	<div class="container">
  	
  		<div class="navbar-header">
  		
  			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  			
  				<span class="icon-bar"></span>
  				
  				<span class="icon-bar"></span>
  				
  				<span class="icon-bar"></span>
  					
  			</button>
  			
  			<a class="navbar-brand">Car Information</a>
  			
  		</div>
  		
  		<div class="collapse navbar-collapse">
  		
  			<form class="navbar-form navbar-right" method="post"> 
  			
  				<div class="form-group">
  				
  					<input type="email" name="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>" />
  																								   
  				</div>
  				
  				<div class="form-group">
  				
  					<input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
  																											
  				</div>
  				

  				
  				<input type="submit" name= "submit" class="btn btn-success" value="Log In">
  				
  			</form>
  			
  		</div>
  		
  	</div>	
  	
  </div>
  
  
 <div class="container contentContainer" id="topContainer">
  		<div class="row">
  		
  			<div class="col-md-6 col-md-offset-3" id="topRow">
 			 
 			 <h1 class="marginTop">Car Information</h1>
 			 
 			 <p class="lead">Search for a car using the VIN numbers and get all it's information.</p>
 			 
 			 
 			 <?php
 			 
 			 	if ($error) {
 			 	
 			 		echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
 			 	
 			 	}
 			 	
 			 	if ($message) {
 			 	
 			 		echo '<div class="alert alert-success">'.addslashes($message).'</div>';
 			 	
 			 	}
 			 
 			 ?>
 			 
 			 
 			 <p class="bold marginTop">Interested? Sign Up Below!</p>
 			 
 			 <form class="marginTop" method="post"> 
 			 	
 			 <div class="form-group">
 			 		<label for="name">Name</label>
  				
  					<input type="text" name="name" placeholder="Full Name" class="form-control" value="<?php echo addslashes($_POST['name']); ?>" />
  																								   
  				</div>
 			 
 			 	<div class="form-group">
 			 	
  					<label for="email">Email Address</label>
  					
  				<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo addslashes($_POST['email']); ?>" />
  																							   
				</div>
				
				<div class="form-group">
 			 	
  					<label for="password">Password</label>
  					
  				<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo addslashes($_POST['password']); ?>" />
  																								  
				</div>
				
			 <div class="form-group">
			 	<label for="password">Confirm Password</label>
  				
  					<input type="password" name="check_password" placeholder="Confirm Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
  																											
  				</div>

 			 	<input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop"/> 
 			 	
 			 </form>
 			 
 			 </div>
 		 
		</div>
		
  </div>
  

    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    <script>
    
    
		$(".contentContainer").css("min-height",$(window).height());
    
    </script>
    
  </body>
