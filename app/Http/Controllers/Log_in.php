<?php namespace App\Http\Controllers;
use \Request as Input;


class Log_in extends Controller {

	public function sign_in(){
        
		$this->check(Input::get('email'),Input::get('password'));
		
        
    }
    
    public function check($email,$password){
        
		$connect = mysqli_connect("localhost", "root", "", "sw2");   
		$query = "SELECT rule FROM users WHERE email='$email' AND "."password"."='$password'";
		$rule = mysqli_query($connect, $query);
      	if($rule)  
      	{  
			$Val = $rule->fetch_assoc()['rule'];

			if($Val == 0){
				return redirect('/Login');
			}elseif($Val == 1){
				return redirect('/');
			}
			
		}else{
			echo '<script>alert("RAGE3 7SABATK W HAT 24YA2Y")</script>';
		}
 	} 
}