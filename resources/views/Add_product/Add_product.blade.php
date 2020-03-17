<!DOCTYPE html>


<html>

    
    <head>
        <title>Add</title>
    </head>
    
    <style>
    
        *{margin: 0; padding: 0;}
        body{background: #ecf1f4; font-family: sans-serif;}
        
        .form-wrap{ width: 320px; background: #3e3d3d; padding: 40px 20px; box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);}
        h1{text-align: center; color: #fff; font-weight: normal; margin-bottom: 20px;}
        
        input{width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 16px; color: #fff;}
        
        input[type="submit"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d;}
        input[type="submit"]:hover{ background: #a4b15c; transition: .6s;}

        input[type="file"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d;}
        input[type="file"]:hover{ background: #a4b15c; transition: .6s;}
        
        
        ::placeholder{color: #fff;}
    
    </style>
    <!-- 
        button{width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 16px; background: #bac675; border: 0; cursor: pointer; color: #3e3d3d;}
        button:hover{ background: #a4b15c; transition: .6s;}
    -->
    <body>
    
        <div class="form-wrap">
        
        <form action="{{ URL::to('AddProduct') }}" method="post" enctype="multipart/form-data">
            
                <h1>Add Product</h1>
                <input type="text" placeholder="Name of The Product">
                <input type="text" placeholder="Description">
                <input type="file" name="file" id="file">
				<input type="submit" value="Upload" name="submit">
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                <!--
                <button type="submit" form="form1" value="Submit">Submit</button>
                
                <button type="submit" form="form1" value="Submit">Submit</button>
                -->
            </form>
        
        </div>
    
    
    
    </body>



</html>