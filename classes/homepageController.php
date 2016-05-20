
	<?php
	  class homepageController extends controller {
	    
	    public function get() {
	      
	      session_start();
	     print_r($_SESSION['id']);
	  	
	  	 include("connection.php");
	      
	      $query = "SELECT * FROM cars WHERE UserId='".$_SESSION['id']."'";
	      $result = mysqli_query($link, $query);
	      $row = $result->fetch_assoc();
	      $keys = (array_keys($row));
		  
		 
	      
	      $homepage = new homepageView;
	      
	      $pageHeader = $homepage->getHeader();
	      $this->html .= $pageHeader;
	      
	      $navBar = $homepage->getNavBar();
	      $this->html .= $navBar;
		  
		  $buttons = $homepage->getButtons();
	      $this->html .= $buttons;
	      
	      
	      if($row != 0) {
	        $userInventory = $homepage->getUserInventory($keys, $result);
	        $this->html .= $userInventory;
	      }
	     
	    }

	    public function post() {}
	    public function put() {}
	    public function delete() {}
	  }
