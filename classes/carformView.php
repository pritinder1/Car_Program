<?php
 class carformView {
  
  public function getHeader() {
   session_start();
  
   $pageHeader = '<!DOCTYPE html>
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
		 	<body>';
		 		            
    
     return $pageHeader;
  }

  public function getBody() {
  	
    $body = '
     <div class="container">
    		<div class="page-header">
		 	    </br><h2>Add Car</h2>
		 	</div>
      
      	<form action="index.php?controller=carformController" method="post">
		
		  <fieldset class="form-group">
		    <label for="vin">VIN</label>
		    <input type="text" placeholder="VIN #" name="vin"  class="form-control" >
		  </fieldset>
   		 
		  <fieldset class="form-group">
		    <select class="form-control" name="cont" id="cont">
		      <option selected disabled>Choose Condition of Car</option>
		      <option value="Used">Used</option>
		      <option value="New">New</option>
		    </select>
      	</fieldset>
	
		<button type="submit" class="btn btn-success">Submit</button>
       </form>
      
     </div>
     
     ';

    return $body;
  }
  
  public function getFooter() {
    $footer = '</body>
     </html>';
     
    return $footer;
   }
 }
