<?php namespace App\Http\Controllers;
use \Request as Input;

class deleteProduct extends Controller {

	public function delete(){
		echo 'tos';
		$this->exqute(Input::get('id'));
    }
    
    public function exqute($i){
        
		$connect = mysqli_connect("localhost", "root", "", "sw2"); 
      	$query = "DELETE FROM `products` WHERE id=$i";  
      	if(mysqli_query($connect, $query))  
      	{  
        	echo '<script>alert("product removed from Database")</script>';  
		}
 	} 
    
}