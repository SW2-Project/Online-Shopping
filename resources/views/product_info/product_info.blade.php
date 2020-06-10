<?php
	session_start();
	
?>
<!DOCTYPE html>
<html>
<link href="tpl_style.css" rel="stylesheet" type="text/css" />
<link href="upload-progress.css" rel="stylesheet" type="text/css">
<style>
.links > a {
    background-color : #bac675;   
	border-radius: 27px;				
    color: #3e3d3d;
    padding: 15px 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}
</style>
  <div id="container">
  <div id="leftside">
  <div class="bigBarContainer">
  <div class="barTitle">
  Prouduct INFO.
  </div>
  <div class="barContent">
  <div>
   <?php

	$conn = mysqli_connect("localhost", "root", "", "sw2");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM products where id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
       $row = $result->fetch_assoc();
       echo'
       <h1 Class="bigChar" href="">'.$row["name"].'</h1>
       <span id="spanBookmark">
     <img src="public\\uploads\\'.$row["photo"].'" style="vertical-align: middle; margin-bottom: 5px">
 
     </p>
     <p>
    <span class="info">details:</span>
    <p>'.$row["details"].'<br /><br /></p>
    </p>';
   
    if($_SESSION['rule']==1){
        echo'
        <div class="links">
        <a href="/add_tocart/$id">Buy</a>
        </div>
        ';
    }
    else{
        echo'<div class="links">
        <a href="Login">Login to buy </a>
        </div>
        ';
    }
            
        
    }
   ?>
   
 
   </div>
   </div>
   </div>
            

</html>