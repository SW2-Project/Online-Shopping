<?php namespace App\Http\Controllers;
use \Request as Input;

class cart extends Controller {

	public function show()
	{
		$connect = mysqli_connect("localhost", "root", "", "sw2");  
		$query = "INSERT INTO `products`(`name`, `details`, `price`, `photo`)  VALUES ('$name','$ditales',$price,'$file')";
	}
 }    