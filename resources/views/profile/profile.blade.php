<?php
	session_start();
	function cheak(){
		if($_SESSION['rule']!=1){
			echo '<script>alert("you are not logged in")</script>';
			echo'<script>window.location.replace("logout");</script>';
		}
	}
	cheak();
?>
<!doctype html>

<html>
  <head>
    <title>User Acount</title>

<link rel="stylesheet" href="acou.css" type='text/css' media='all' />
<style>
    
        *{margin: 0; padding: 0;}
        body{background: #3e3d3d; font-family: sans-serif;}
        .form-wrap{width: 420px; background:  #3e3d3d; padding: 40px 20px; box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);  border: 5px solid #bac675;  border-bottom-left-radius : 27px;   border-bottom-right-radius : 27px;}
        .top-bg{ padding-top :25px; padding-bottom: 50px; display: block;  position: absolute; width: 100%;  top: 0; left: 0; background-color:  #bac675; border: 1px solid #bac675}
        
        
        .inputs{  border-radius: 27px; padding: 20px 15px; box-sizing: border-box; margin-bottom: 20px;background: #3e3d3d;margin-top: 10px;}
        input{width: 90%; background:  #bac675; border: 1px solid #3e3d3d; border-radius: 27px; padding: 8px 15px; box-sizing: border-box; margin-bottom: 20px; margin-left:20px; font-size: 16px; color:#3e3d3d;}
        input[type="text"]:hover{ background: #a4b15c; transition: .6s;}
        input[type="text"]:focus{ background: #a4b15c; transition: .6s;}
        
        input[type="submit"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d; border: 1px solid #3e3d3d;margin-bottom:40px;}
        input[type="submit"]:hover{ background: #a4b15c; transition: .6s;}


        input[type="file"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d; border: 1px solid #3e3d3d; }
        input[type="file"]:hover{ background: #a4b15c; transition: .6s; border: 1px solid #3e3d3d}

        
        
        ::placeholder{color:#3e3d3d;}
    
    </style>
  </head>
  <body>
        
 
<div id="page" class="page">








<section class="profile">
    <div class="layout">
        <div class="navigation">
    <a class="nav selected" href="#">My Profile</a>
    <a class="nav" href="/">Home Page</a>
    <a class="nav" href="#">Cart Page</a>
</div>        
<div class="col-left">
            
<div class="user-information">

    <div class="user-information-container">
        <img src="download.png">
        <?php
    echo'<h1>'.$_SESSION["name"].'</h1>
    <p class="uid">ID: '.$_SESSION["id"].'</p>
    ';
?>
        
       
        <a href="edit_profile" id="account_settings"><i class="icon"></i>Edit Profile</a>
    </div>

    <div class="followers">
    <?php
    //   $conn = mysqli_connect("localhost", "root", "", "sw2");
    //   // Check connection
    //   if ($conn->connect_error) {
    //       die("Connection failed: " . $conn->connect_error);
    //   }
    //   $sql = "SELECT * FROM cart where userid = ".$_SESSION["id"]."";
    //   $result = $conn->query($sql);
    
    //   echo'
    //   <a href="cart"><span class="followers_count">'.$result->num_rows.'</span>Items Bought</a>
    //   ';
    //   $conn->close();
 ?>
        <a href="#"><span class="followers_count">0</span>Items Bought</a>
    </div>
</div>

</section>

</div>
</body>
</html>
