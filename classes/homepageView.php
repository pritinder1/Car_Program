<?php
  class homepageView {
	  
	   
	    public function getHeader() {

	      session_start();
		  
		 
		  
	      $pageHeader = '<!DOCTYPE html>
	        <html lang="en">
	          <head>
	            <meta charset="utf-8">
	            <title>Home</title>
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
	    
	    
	    public function getNavBar() {
	     
	      $navBar = '
		  
		   
  	<div class="navbar navbar-default navbar-fixed-top">
  	<div class="container">
  	 
  	
  		<div class="navbar-header">
 
			
							
							<ul class="nav nav-pills">
				  <li class="nav-item">
				    <button type="submit" class="btn btn-success">
			    <a href="index.php?controller=carformController">+ Add Car</a>
			   </button>
				  </li>
				
				  <li class="nav-item">
				    <div >
	              <form action="classes/logout.php" method="post">
	                <button type="submit" class="btn btn-primary">Logout</button>
	              </form>
	            </div>
				  </li>
			
				</ul>
			
			
			</div>
  			
  			
  			</div>
  		</div>
	      ';
	      
	      return $navBar;
	    }

   public function getButtons() {
	      $buttons = '
	     
	        <br>
	        <div class="container">
	          <div>
			   	          
	          </div>
	          <div >
	            <div >
	             
	            </div>
	          </div>
	        </div>';
	        
	        return $buttons;
	    }
	    
	    
	    
	    public function getUserInventory($keys, $result) {
	    
	      $userInventory = '
	        <br>
	      <div class="container">
	      	  <div class="page-header">
		 	    </br><h1>My Cars</h1>
		 	    </div>
		 	    <table class="table table-hover">
		 	      <thead>
		 	        <tr>';
		 	          for($i=0; $i<count($keys); $i++){
		 	            if($keys[$i] != 'UserId') {
		 	              $userInventory .= '<th>'.$keys[$i].'</th>';
		 	            }
		 	          }
		 	          $userInventory .= '<th>Details</th></tr>
		 	      </thead>
		 	      <tbody>';
		 	        foreach($result as $record) {
		 	          $userInventory .= '<tr>';
		 	          for($i=0; $i<count($record); $i++) {
		 	            if($keys[$i] != 'UserId') {
		 	             if($keys[$i] == 'Price'){
		 	              $userInventory .= '<td>$ '.$record[$keys[$i]].'</td>';
		 	             }
		 	             else {
		 	              $userInventory .= '<td>'.$record[$keys[$i]].'</td>';
		 	             }
		 	            }
		 	          }
		 	          $userInventory .= '<td> 
		 	          <a  class="btn btn-info btn-sm" href="index.php?controller=detailController&vin='.$record['VIN'].'">
          				<span class="glyphicon glyphicon-info-sign"></span></a>
          
		 	        </td>
		 	      	<td> 
		 	          <a  class="btn btn-info btn-sm" href="index.php?controller=editController&vin='.$record['VIN'].'">
          				<span class="glyphicon glyphicon-edit"></span></a>
		 	        </td>
		 	        
						<td> 
		 	          <a  class="btn btn-danger btn-sm" href="index.php?controller=deleteController&vin='.$record['VIN'].'">
          				<span class="glyphicon glyphicon-trash"></span></a>
		 	        </td>
					
		 	        </tr>
		 	        
		 	        ';
		 	        }
		 	      $userInventory .= '</tbody>
		 	    </table>
		 	  </div>';
		 	  
		 	  return $userInventory;
	    }
	    
	    
	   
	    
	    
	 
	    
	    public function getFooter() {
	      
	      $footer = '</body>
	        </html>';
	      
	      return $footer;
	    }
	 }
