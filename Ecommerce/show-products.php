<?php
	//@TODO: Put your PHP logic here

	
	
	//1. connect to database
	//1.tell system what is database information?
	//  dbname? db password? db user?
	$dbhost = "localhost";     //address of your database
	$dbuser = "root";
	$dbpassword = "";            //on MAMP, this is "root"
	$dbname = "madt3134";      ///name of database
  	
	
	//2,connect to Database
	$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
	
	
	
	//3. make a SQL Query and send to database
	$query = "select * from product";
	
	//4.send query to database and GET RESULT
	$result = mysqli_query($conn,$query);
	
	//5. SHOW the DATABASE RESULT SOMEWHERE
		//	var_dump($result);
		/*
		foreach($x in $result)
		{
			print($x);
		}
		*/
	
	
	//loop through the database result
		
	
	//6.DISCONNECT DATABASE
	
	
	
	
	
	
	
	
	// 2. run your sql query
	
	
	// 3. get results from database
	
	
	
	// 4. after you get results, show in UI
	// (note -> this should be done inside the <table> tag below)
	//  do you know why?
	 
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
	  	<h1> Admin Panel </h1>
		<h2> Products are shown below: </h2>
	  
		<!-- products table -->
		<!-- @TODO: Insert PHP code here -->
		<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
		  <thead>
			<tr>
			  <th class="mdl-data-table__cell--non-numeric">Name</th>
			  <th>Price</th>
			  <th>Description</th>
			</tr>
		  </thead>
		  
		 
		  <tbody>
		   <?php
			//@TODO: You need to jumble PHP and HTML code here.
			
			//5.loop through the database result
			while($product = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
					echo "<td class='mdl-data-table__cell--non-numeric'>";
						echo $product["name"];
					echo "</td>";
					echo "<td>";
						echo $product["price"];
					echo "</td>";
					echo "<td>";
						echo $product["description"];
					echo "</td>";
					echo "<td>";
						echo "<a href='edit.php? id = ". $product['p_id']"'>";
							echo "EDIT";
						echo "</a>";	
					echo "</td>";
						
				echo "</tr>";
			
			}
		  ?>
			
		  </tbody>
		</table>
		<!-- end table -->
	
		<br>
		
		<a href="add-product.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
			+ Add Product 
		</a>
	  </div>
	</div>
	
</body>
</html>

<?php
	mysqli_free_result($result);    //clean up your row variable
	mysqli_close($conn);     //close connection
?>



