<?php
	session_start();
	function cheak(){
		if($_SESSION['rule']!=0){
			echo '<script>alert("you are not admin")</script>';
			echo'<script>window.location.replace("logout");</script>';
		}
	}
	cheak();
?>

<!DOCTYPE html>


<html>

    
    <head>
        <title>Add</title>
    </head>
    
     <style>
    
        *{margin: 0; padding: 0;}
        body{background: #3e3d3d; font-family: sans-serif;}
        
        .form-wrap{width: 420px; background:  #3e3d3d; padding: 40px 20px; box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);  border: 5px solid #bac675;  border-bottom-left-radius : 27px;   border-bottom-right-radius : 27px;}
        .top-bg{ padding-top :25px; padding-bottom: 50px; display: block;  position: absolute; width: 100%;  top: 0; left: 0; background-color:  #bac675; border: 1px solid #bac675}
        h1{text-align: center; color: #3e3d3d; font-weight: normal; }
        
        .inputs{ margin-top: 100px;}
        input{width: 90%; background:  #bac675; border: 1px solid #3e3d3d; border-radius: 27px; padding: 8px 15px; box-sizing: border-box; margin-bottom: 20px; margin-left:20px; font-size: 16px; color:#3e3d3d;}
        input[type="text"]:hover{ background: #a4b15c; transition: .6s;}
        input[type="text"]:focus{ background: #a4b15c; transition: .6s;}
        
        input[type="submit"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d; border: 1px solid #3e3d3d;margin-bottom:40px;}
        input[type="submit"]:hover{ background: #a4b15c; transition: .6s;}


        input[type="file"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d; border: 1px solid #3e3d3d; }
        input[type="file"]:hover{ background: #a4b15c; transition: .6s; border: 1px solid #3e3d3d}

        
        
        ::placeholder{color:#3e3d3d;}
    
    </style>
        button{width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 16px; background: #bac675; border: 0; cursor: pointer; color: #3e3d3d;}
        button:hover{ background: #a4b15c; transition: .6s;}
    -->
    <body>
    
        <div class="form-wrap">
        
        <form action="{{ URL::to('AddProduct') }}" method="post" enctype="multipart/form-data">
            <div class="top-bg">
                <h1>Add Product</h1>
            </div>
            <div class="inputs">
                <input type="text" placeholder="Name of The Product" name="name" required=""> <!--Edit Done-->
                <input type="text" placeholder="Description" name = "Description" required=""> <!--Edit Done-->
                <input type="number" placeholder="Enter Price" name="price" min="0" required=""> <!--Price Field Added-->
                <input type="file" name="file" id="file" required=""> <!--Edit Done-->
				<input type="submit" value="Upload" name="submit"> 
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                
                <!--
                <button type="submit" form="form1" value="Submit">Submit</button>
                
                <button type="submit" form="form1" value="Submit">Submit</button>
                -->
                </div>
            </form>
        
        </div>
    
    
    
    </body>



</html>
<script>  
                    $(document).ready(function(){  
                    $('#submit').click(function(){  
                    var image_name = $('#file').val();  
                    var name = $('#name').val(); 
                    var name2 = $('#Description').val(); 
                    if(name == '')  
                    {  
                        alert("Please Put Name");  
                        return false;  
                    }
                    if(name2 == '')  
                    {  
                        alert("Please Put Description");  
                        return false;  
                    }
                    if(image_name == '')  
                    {  
                        alert("Please Select Image");  
                        return false;  
                    } 
                    else  
                    {  
                        var extension = $('#file').val().split('.').pop().toLowerCase();  
                        if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                        {  
                            alert('Invalid Image File');  
                            $('#file').val('');  
                            return false;  
                        }  
                    }  
      });  
 });  
 </script>  