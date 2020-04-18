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
        <title>Table with database</title>
        <style>
            *{margin: 0; padding: 0;}
            body{background: #3e3d3d; font-family: sans-serif;}
        
            .form-wrap{ width: 320px; background: #3e3d3d; box-sizing: border-box;  border: 5px solid #bac675; margin-top:50px; margin-left: 30px;  border-bottom-left-radius : 27px;   border-bottom-right-radius : 27px; margin-bottom:20px;}
            h1{text-align: center; color: #3e3d3d; font-weight: normal; margin-bottom: 30px; background: #bac675; padding-top:20px; padding-bottom:20px;}

            .contain{margin-bottom:30px;}
            input{width: 90%; background:  #bac675; border: 1px solid #3e3d3d; border-radius: 3px; margin-left: 15px; padding: 8px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 16px; color: #3e3d3d; border-radius:27px;}
            input[type="text"]:hover{ background:  #a4b15c; transition: .6s;}
            input[type="text"]:focus{ background:  #a4b15c; transition: .6s;}
        
            input[type="submit"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d;}
            input[type="submit"]:hover{ background: #a4b15c; transition: .6s;}

            input[type="file"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d;}
            input[type="file"]:hover{ background: #a4b15c; transition: .6s;}
        
            table {
                border-collapse: collapse;
                width: 100%;
                color: #588c7e;
                font-family: monospace;
                font-size: 25px;
                text-align: left;
            }
            th {
                background-color: #bac675;
                color: #3e3d3d;
            }
            tr:nth-child(even) {background-color: #a4b15c}
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>Photo</th>
            </tr>
        <div class="form-wrap">
        
        <form action="{{ URL::to('deleteproduct') }}" method="post" enctype="multipart/form-data">
            
                <h1>Add Product</h1>
                <div class="contain">
                <input type="text" placeholder="Enter id" name="id" require>
				<input type="submit" value="Delete" name="submit">
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                </div>
            </form>
        
        </div>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "sw2");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] .'<td>  
                                    <img src="uploads\\'.$row['photo'].'" height="100" width="100" class="img-thumnail" />  
                               </td></tr>';
                    }
					//echo'';
                    echo "</table>";
                } else { echo "0 results"; }
                $conn->close();
            ?>
        </table>
    </body>
</html>