<?php

class delete {
	
	
	public function deleteCar($method, $page){
		
		
		$formHTML = '<form action="' .$page. '" method="' .$method. '" >';
			
					$formHTML.= '<input  type="submit" value="Delete"/>';	
		
		
		return $formHTML; 					
			
		}
		
		
	}

?>