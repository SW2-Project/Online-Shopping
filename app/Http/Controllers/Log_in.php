<?php namespace App\Http\Controllers;
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
<<<<<<< HEAD
		$query = 'SELECT * FROM `users` where email="'.$email.'" and password="'.$password.'"';
		//echo $query;
		$result = $connect->query($query);
		//echo $result->num_rows;
		//echo $result->fetch_assoc()['rule'];
		//var_dump($result);
      	if($result->num_rows > 0)  
      	{
			if($result->fetch_assoc()['rule'] == 1){
				return 0;
			}elseif($result->fetch_assoc()['rule'] == 0){
				return 1;
=======
		$query = "SELECT rule FROM users WHERE email='$email' AND "."password"."='$password'";
		$rule = mysqli_query($connect, $query);
      	if($rule)  
      	{  
			$Val = $rule->fetch_assoc()['rule'];

			if($Val == 0){
				return redirect('');
			}elseif($Val == 1){
				return redirect('');
>>>>>>> 4b58a1d39260d8a8347670d2434c6af2bba84003
			}
			
		}else{
			return -1;
		}
 	} 
}