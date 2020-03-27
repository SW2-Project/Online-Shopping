<?php namespace App\Http\Controllers;
use \Request as Input;

class Log_in extends Controller {

	public function sign_in(){
        
		
			$this->add(Input::get('email'),Input::get('password'));
		
        
    }
    
    public function add($email,$password){
        
		$connect = mysqli_connect("localhost", "root", "", "sw2");   
		$query = "SELECT rule FROM users WHERE email='$email' AND "."password"."='$password'";
      	if(mysqli_query($connect, $query))  
      	{  
            $rule = mysqli_query($connect, $query);
        	echo '<script>alert("'.$rule.'")</script>'; 
		}
 	} 
}