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
		
			return redirect('/');
		}
		else{
			echo '<script>alert("RAGE3 7SABATK W HAT 24YA2Y >.<")</script>';
			echo'<script>window.location.replace("Login");</script>';
		}
	
		
        
    }
    
    public function check($email,$password){
        
		$connect = mysqli_connect("localhost", "root", "", "sw2");   
		$query = 'SELECT * FROM `users` where email="'.$email.'" and password="'.$password.'"';
		//echo $query;
		$result = $connect->query($query);
      	if($result->num_rows > 0)  
      	{
			
			$row = $result->fetch_assoc();
				if($row['rule'] == 1){
					$_SESSION['rule']=1;
					$_SESSION['name']=$row['name'];
					$_SESSION['password']=$row['password'];
					$_SESSION['id']=$row['id'];
					return 0;
				}elseif($row['rule'] == 0){
					$_SESSION['rule']=0;
					$_SESSION['name']=$row['name'];
					$_SESSION['password']=$row['password'];
					$_SESSION['id']=$row['id'];
					return 1;
				}
			
		}else{
			return -1;
		}
 	} 
}