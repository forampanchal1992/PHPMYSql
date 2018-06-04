<?php
	
	$id= $_GET["id"];
	
	$dbhost = "localhost";     //address of your database
	$dbuser = "root";
	$dbpassword = "";            //on MAMP, this is "root"
	$dbname = "madt3134";      ///name of database
  	
	
	//2,connect to Database
	$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
	

	
	//3. make a SQL Query and send to database
	$query = "select * from `product` where p_id=" .$id;
	$result = mysqli_query($conn,$query);
	$products = mysqli_fetch_assoc($result);
	
	
	//4.send query to database and GET RESULT
	
	
	 if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		//write code to POST REQUEST
		
		$name = $_POST['name'];
		$price = $_POST['price'];
		$description = $_POST['desc'];
		
		$query = "DELETE FROM `product` WHERE p_id = '$id'";
	
		
		$result = mysqli_query($conn,$query);
		
		header('Location:'."show-products.php");
	
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
	  	<h1> DELETE Product </h1>
		<h2> Are you sure you want to delete the product: </h2>

		<!-- form -->
		<!-- @TODO: Update your form action/method here -->
		<form  method="POST">
		
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<!-- @TODO: update NAME and ID! -->
				<input name="name" class="mdl-textfield__input" type="text" id="name" value="<?php echo $products['name'] ?>">
				<label class="mdl-textfield__label" for="sample3">Product Name</label>
			</div>
			<br>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<!-- @TODO: update NAME and ID! -->
				<input name="desc" class="mdl-textfield__input" type="text" id="desc" value=" <?php echo $products['description']?>">
				<label class="mdl-textfield__label" for="sample3">Description</label>
			</div>
			<br>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<!-- @TODO: update NAME and ID! -->
				<input name="price" class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="price" value="<?php echo $products['price']?>">
				<label class="mdl-textfield__label" for="sample2">Price</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
			<br>
				  
		  <!-- @TODO: Update the link  -->
		  <button  class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
			DELETE Product
		  </button>
		</form>
		
		<br>
		
		<a href="show-products.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
			< Go Back 
		</a>
	  </div>
	</div>
	
</body>
</html>