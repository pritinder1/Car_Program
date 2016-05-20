 <?php

    class deleteController extends editController {
		   
		   
		   public function get() {
		   	 		
			include("connection.php");
				$query = "DELETE FROM cars where VIN  = '".$_GET['vin']."'" ;
				$result = mysqli_query($link, $query);
				
				header('Location:index.php?controller=homepageController');
	
			  
		       }
 
           public function post() {
					
		   }
			
	       public function put() {
	       	
			
	       }
	       public function delete() {}
			
			}
