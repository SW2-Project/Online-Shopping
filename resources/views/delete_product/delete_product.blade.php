<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
        <style>
			*{margin: 0; padding: 0;}
            body{background: #ecf1f4; font-family: sans-serif;}
        
            .form-wrap{ width: 320px; background: #3e3d3d; padding: 40px 20px; box-sizing: border-box;}
            h1{text-align: center; color: #fff; font-weight: normal; margin-bottom: 20px;}
        
            input{width: 100%; background: #3e3d3d; border: 1px solid #fff; border-radius: 3px; padding: 6px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 16px; color: #fff;}
        
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
                background-color: #588c7e;
                color: white;
            }
            tr:nth-child(even) {background-color: #f2f2f2}
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
                <input type="text" placeholder="Enter id" name="id" require>
				<input type="submit" value="Delete" name="submit">
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                
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