<?php 

	class edit{

	public function createEdit( $data,$method, $action){
		
			 $array = $data;
		
			$id = $_GET['vin'];
			 
			 $formHTML = '<form>

			
				<label>Make</label>
				<input/ type="text value = "'." SELECT Make FROM cars WHERE VIN = '".$id.'" > 
				
				<label>Model</label>
				<input/>
				
				<label>Year</label>
				<input/>
				
				<label>Condition</label>
				<select>
				<option value = "new">New</option>
				<option value = "used">Used</option>
				<select>
				
				</form>';

	
		
		
		
		return	$formHTML;
							
					
				
			}			
			
						
								
			 }
																			 
