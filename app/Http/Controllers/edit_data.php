<?php namespace App\Http\Controllers;
use \Request as Input;
session_start();

class edit_data extends Controller {

	public function edit(){
        
		
            $this->excute(Input::get('name'),Input::get('password'));
            
            //return redirect('edit_profile');
		
        
    }
    
    public function excute($name,$password){
        $id=$_SESSION['id'];
       
		$connect = mysqli_connect("localhost", "root", "", "sw2");   
      	$query = "UPDATE users SET name='".$name."',password='".$password."' WHERE id=$id";  
      	if($connect->query($query) === TRUE)  
          {  $_SESSION['name']=$name;
            $_SESSION['password']=$password;
			echo '<script>alert("data updated Successfully >.<")</script>'; 
			echo'<script>window.location.replace("profile");</script>';
        }
        else{
            echo '<script>alert("error '.$id.' >.<")</script>'; 
            echo'<script>window.location.replace("edit_profile");</script>';
        }
		
 	} 
}