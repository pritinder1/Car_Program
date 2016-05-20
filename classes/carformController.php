<?php
 
 class carformController  extends controller {
  
  public function get() {
   
   session_start();
   
   $carForm = new carformView;

   $pageHeader = $carForm->getHeader();
   $this->html .= $pageHeader;

  
   
   $body = $carForm->getBody();
   $this->html .= $body;

   $footer = $carForm->getFooter();
   $this->html .= $footer;
  }

  public function post() {
   session_start();
   
 
   $vin = $_POST['vin'];
   
   
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL,
   "https://api.edmunds.com/api/vehicle/v2/vins/$vin?fmt=json&api_key=x4fzu97swfe2pn9fjd6pppv2");
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   $output = curl_exec($ch);
   curl_close($ch);
   
   
   $response = json_decode($output);
   
   
   $userid = $_SESSION['id'];
   $make = $response->make->name;
   $model = $response->model->name;
   $year = $response->years[0]->year;
   $condition = $_POST['cont'];
   $price;

   if($condition == 'new'){
    $price = $response->price->baseInvoice;
   }
   else{
    $price = $response->price->usedPrivateParty;
   }

 include("connection.php");

  
   $query = "INSERT INTO cars (VIN, UserId, Make, Model, Year, carCondition, Price) 
   VALUES('$vin', '$userid', '$make', '$model', '$year', '$condition','$price')";

   if($link->query($query) === TRUE) {
    echo "New record created successfully";
    header("location: index.php?controller=homepageController");
   }
   else {
    echo "Error: " . $query . "<br>" . $link->error;
   }
  }

  public function put() {}
  public function delete() {}

 }
