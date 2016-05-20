<?php

    class editController extends homepageController {
		   
		   
		   public function get() {
		   	 		include("connection.php");	
					session_start();    	
			
			
			   $data = "SELECT * FROM cars WHERE VIN = '".$_GET['vin']."'" ;
			  $result =  mysqli_query($link, $data);
			  $row =  mysqli_fetch_array($result);
			  
			  
			   $_SESSION['car'][0] = $row["Make"];
			   $_SESSION['car'][1] = $row["Model"];
			   $_SESSION['car'][2] = $row["Year"];
		  
			  
			  
			?>
			  
			 	<!DOCTYPE html>
    <html lang="en">
     <head>
      <meta charset="utf-8">
      <title>Car Form</title>
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
     
     
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
   <style>
   
   		.navbar-brand{
   			font-size:1.8em;
   			
   		}
		.nav-item{
			
			padding-top: 10px;
			padding-left: 20px;
			margin-left: 725px;
		}
   		
   		#topContainer{
   			
   			height:400px;
   			width:100%;
   			
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
		
		
		button a {
			
			color: white;
		}
   </style>
   
   </head>
			 	
			 	
		<body>	 	
			
			<form method="post">
			 	
			 <div class="form-group">
 			 		<label for="name">Make</label>
  				
  					<input type="text" name="make" value="<?php $make = ($_SESSION['car'][0]); echo $make; ?>" class="form-control"  />
  																								   
  				</div>
 			 
 			 	<div class="form-group">
 			 	
  					<label for="email">Model</label>
  					
  				<input type="text" name="model" class="form-control" value="<?php $model = ($_SESSION['car'][1]); echo $model ; ?>"  />
  																							   
				</div>
				
				<div class="form-group">
 			 	
  					<label for="password">Year</label>
  					
  				<input type="text" name="year" class="form-control" value="<?php  $year = ($_SESSION['car'][2]); echo $year ; ?>" />
  																								  
				</div>
				

 			 	<input type="submit" name="submit" value="Update" class="btn btn-success btn-lg marginTop"/> 
 			 	
 			 </form>
 			 
			 
			 </body>
			  </html>
			  
			  
		<?php	 
			 
       }
		  
		   
		  
             
           public function post() {
           	
			if($_POST['submit'] == 'Update'){
				include("connection.php");
				
				$make = $_POST['make'];
				$model = $_POST['model'];
				$year = $_POST['year'];
				
				$query = "UPDATE cars SET `Make`= '".$make."' ,`Model`= '".$model."' ,`Year`= '".$year."' WHERE VIN = '".$_GET['vin']."'" ;
						
				mysqli_query($link, $query);
					
				header('Location:index.php?controller=homepageController');
				
				
			}
		
			
			  }
			   
	       public function put() {
	       	
			
	       }
	       public function delete() {}
			
			}
