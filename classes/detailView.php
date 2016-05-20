<?php
 
 class detailView {
  
  public function getHeader() {

	include("connection.php");
   session_start();
   
  $data = "SELECT * FROM cars WHERE VIN = '".$_GET['vin']."'" ;
			  $result =  mysqli_query($link, $data);
			  $row =  mysqli_fetch_array($result);
			   
			  
print_r($rows);
	
  
   $pageHeader = '<!DOCTYPE html>
    <html lang="en">
     <head>
      <meta charset="utf-8">
      <title>Car Information</title>
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
	    <!-- Bootstrap -->
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
   			margin-top:50px;
   		
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
    
     <body>';
    
     return $pageHeader;
  }
  
  
  public function getNavBar() {
   $navBar = '
      	<div class="navbar navbar-default navbar-fixed-top">
  	<div class="container">
  	 
  	
  		<div class="navbar-header">
 
			<a class="navbar-brand">Information</a>					
							
			
			</div>
  			
  			
  			</div>
  		</div>';
  
   return $navBar;
  }

?>
   
    
    
  
       <?php

   
  }
  

   public function getFooter() {
    $footer = '</body>
     </html>';
     
    return $footer;
   }
   
 