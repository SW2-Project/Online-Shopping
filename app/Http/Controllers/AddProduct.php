<?php namespace App\Http\Controllers;
use \Request as Input;

class AddProduct extends Controller {

	public function upload(){
        
		if(Input::hasFile('file')){
            $file = Input::file('file');
			$file->move('uploads', $file->getClientOriginalName());
			//echo '<script>alert("product Inserted into Database")</script>';
			//echo(Input::get('name'));
			//$dir = new DirectoryIterator(dirname('uploads'));
			//foreach ($dir as $fileinfo) {
    			//echo $fileinfo->getFilename() . "\n";
			//}
			$this->add(Input::get('name'),Input::get('Description'),$file->getClientOriginalName());
		}
        
    }
    
    public function add($name,$ditales,$file){
        
		$connect = mysqli_connect("localhost", "root", "", "sw2");  
 		//$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      	$query = "INSERT INTO `products`(`name`, `details`, `photo`)  VALUES ('$name','$ditales','$file')";  
      	if(mysqli_query($connect, $query))  
      	{  
			echo '<script>alert("product Inserted into Database")</script>';
			return redirect('delete_product');
		}
		//$connect.close();
 	} 
    
}