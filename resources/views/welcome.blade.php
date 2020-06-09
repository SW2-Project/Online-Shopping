<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}
.top-left {
    position: absolute;
    left: 10px;
    top: 18px;
}
</style>



<link rel='stylesheet' id='bootstrap-css' href='bootstrap.min2.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-css' href='style.css' type='text/css' media='all' />

<link rel='stylesheet' id='hover_effects-css' href='hover-effects1.css' type='text/css' media='all' />


<link rel='stylesheet' id='wpdreams-asl-basic-css' href='style.basic.css' type='text/css' media='all' />
             


<body>

<div class="navbar-section">
<div class="container">
<div class="row">
<div class="top-right">
<a href="#">manage account</a>


<a href="{{ route('Login') }}">Login</a>
</div>
<div class="top-left"><h4>Online Shopping</h4></div>
<div class="col-md-7">

</div>
<div class="col-md-5 text-left">
<div class="search">
<form class="navbar-left" role="search">
<input type="search" name="search" placeholder="Search for product">
</form>
</div>


</div>
</div>
</div>
</div>
</div>



<div class="container">
<div class="main-widget">
<div class="widget-head">

<div class="clearfix"></div>
</div>
<div class="widget-body">
<div class="row list-item-row display-flex">
<?php
	session_start();
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
            echo 
            '
          
            <div class="col-xs-6 col-sm-2 col-md-2 col-list-padding">
            <div class="hovereffect">
            <img class="img-responsive" src="uploads\\'.$row["photo"].'" alt="'.$row["name"].'" />
            <a href="#" title="'.$row["name"].'">
            <div class="overlay">
            <h2>'.$row["name"].'</h2>
            </div></a>
            </div>
            </div>';
        }
        //echo'';
        echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
?>

</div>
</div>
</div>
</div>



</body>
</html>
