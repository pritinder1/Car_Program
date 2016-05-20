<?php
 class detailController extends controller {
  
  public function get() {
  	
	session_start();
	  
	  
	$vin = $_GET['vin'] ;
   
   
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL,
   $url  = "https://api.edmunds.com/api/vehicle/v2/vins/$vin?fmt=json&api_key=x4fzu97swfe2pn9fjd6pppv2");
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   $output = curl_exec($ch);
   curl_close($ch);
  
   $response = json_decode($output);
   
   //$photo = "https://api.edmunds.com/v1/api/vehiclephoto/service/findphotosbystyleid?styleId=3883&fmt=json&api_key=x4fzu97swfe2pn9fjd6pppv2";
   
 
   
   
  
   
   $make = $response->make->name;
   $model = $response->model->name;
   $year = $response->years[0]->year;
   $engine = $response->engine->size;
   $cylinder = $response->engine->cylinder;
   $transmission= $response->transmission->transmissionType;
   $highway = $response->MPG->highway;
   $city = $response->MPG->city;
   $vin = $_GET['vin'];
   
   
   
   
 
   
   
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

	   <div class = container">
     
      
	  <table class="table table-striped marginTop">
	  <tr>
	  <th>Make</th>
	  
	  <td><?php echo $make ?> </td> 
	  
	  </tr>
	  
	 	<th>Model</th>
	  
	  <td><?php echo $model ?> </td> 
	  
	  </tr>
	  
	  
	 <th>Year</th>
	  
	  <td><?php echo $year ?> </td> 
	  
	  </tr>
	  
	  
	  <th>Engine</th>
	  
	  <td><?php echo $engine ?> </td> 
	  
	  </tr>
	  
	  <th>Cylinder</th>
	  
	  <td><?php echo $cylinder ?> </td> 
	  
	  </tr>
	  
	  <th>Transmisson</th>
	  
	  <td><?php echo $transmission ?> </td> 
	  
	  </tr>	
	    
	  <th>Highway MPG</th>
	  
	  <td><?php echo $highway ?> </td> 
	  
	  </tr>
	  
	 <th>City MPG</th>
	  
	  <td><?php echo $city ?> </td> 
	  
	  </tr>
	  <th>VIN</th>
	  
	  <td><?php echo $vin ?> </td> 
	  
	  </tr>	  
	  
	  
	  
	  
	  
	  <table> 
      
	  
     </div>
        
  
  
 
 <?php  
 
 
     }



  
  public function post(){}
  public function put(){}
  public function delete(){}
  
  
 } 