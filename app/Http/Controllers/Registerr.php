<?php namespace App\Http\Controllers;
use \Request as Input;

class Registerr extends Controller {

	public function upload(){
        
		
			$this->add(Input::get('Username'),Input::get('email'),Input::get('password'));
		
        
    }
    
    public function add($name,$email,$password){
        
		$connect = mysqli_connect("localhost", "root", "", "sw2");   
      	$query = "INSERT INTO `users`(`name`, `email`, `password`,`rule`)  VALUES ('$name','$email','$password',1)";  
      	if(mysqli_query($connect, $query))  
      	{  
        	echo '<script>alert("User Added Successfully")</script>';  /* users Added*/
		}
		
 	} 
}