<?php namespace App\Http\Controllers;
use \Request as Input;

session_start();
class add_tocart extends Controller {

	public function add($id){
		$this->exqute($id);
		return redirect('profile');
    }
    
    public function exqute($i){
        
		$connect = mysqli_connect("localhost", "root", "", "sw2"); 
		$query = 'INSERT INTO cart(userid, productid) VALUES ($_SESSION["id"],$i)';
		$q='insert into cart (userid , productid) values ("'.$_SESSION["id"].'","'.$i.'")';

      	if(mysqli_query($connect, $q))  
      	{  
        	echo '<script>alert("product removed from Database")</script>';  
		}
 	} 
    
}