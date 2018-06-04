<?php
	//@TODO: Put your PHP logic here
	//print_r($_POST);
	
	$name = $_POST["name"];
	$price = $_POST["price"];
	$description = $_POST["desc"];
	
	$dbhost = "localhost";     //address of your database
	$dbuser = "root";
	$dbpassword = "";            //on MAMP, this is "root"
	$dbname = "madt3134";      ///name of database
  	
	
	//2,connect to Database
	$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
	
	$query = 
		'INSERT INTO product (name,price,description)'.
		'VALUES ("' .$name .'","' .$price .'","' .$description.'")';
		
	//echo "<br> $query". "<br>";	
	$result = mysqli_query($conn,$query);
	if($result)
	{
		echo "DONE";
	}
	else
	{
		echo "SOMETHING WRONG!!";
	}
?>
<!DOCTYPE html5>
<html>
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<style type="text/css">
		.mdl-grid {
			max-width:1024px;
			margin-top:40px;
		}
		
		h1 {
			font-size:36px;
		}
		h2 {
			font-size:30px;
		}
	</style>

</head>
<body>

	<div class="mdl-grid">
	  <div class="mdl-cell mdl-cell--12-col">
		<p> Put some messages here? </p>
		
		<a href="show-products.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
			< Go Back 
		</a>
	  </div>
	</div>
	
</body>
</html>