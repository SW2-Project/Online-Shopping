<?php namespace App\Http\Controllers;
session_start();
use \Request as Input;


class Log_in extends Controller {

	public function sign_in(){
        //return redirect('Admin');
		$i=$this->check(Input::get('email'),Input::get('password'));
		if($i==1){
			return redirect('Admin');
		}elseif($i==0){
			echo '<script>alert("we curruntly working on this sight please be patient >.<")</script>';
			//return redirect('cient');
		}
		else{
			echo '<script>alert("RAGE3 7SABATK W HAT 24YA2Y")</script>';
		}
		
        
    }
    
    public function check($email,$password){
        
		$connect = mysqli_connect("localhost", "root", "", "sw2");   
		$query = 'SELECT * FROM `users` where email="'.$email.'" and password="'.$password.'"';
		//echo $query;
		$result = $connect->query($query);
		//echo $result->num_rows;
		//echo $result->fetch_assoc()['rule'];
		//var_dump($result);
		//$_SESSION['name']=$result->fetch_assoc()['name'];
		//$_SESSION['rule']=$result->fetch_assoc()['rule'];
      	if($result->num_rows > 0)  
      	{
			
			if($result->fetch_assoc()['rule'] == 1){
				$_SESSION['name']=$result->fetch_assoc()['name'];
				$_SESSION['rule']=$result->fetch_assoc()['rule'];
				return 0;
			}elseif($result->fetch_assoc()['rule'] == 0){
				$_SESSION['name']=$result->fetch_assoc()['name'];
				$_SESSION['rule']=$result->fetch_assoc()['rule'];
				return 1;
			}
			
		}else{
			return -1;
		}
 	} 
}