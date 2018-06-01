
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body>

	<h1>Admin Panel</h1>
	<h2>Products details are here</h2>
	
	 <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Name</th>
      <th>Price</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
      <td>25</td>
      <td>$2.90</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
      <td>50</td>
      <td>$1.25</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
      <td>10</td>
      <td>$2.35</td>
    </tr>
  </tbody>
	 
</table>
	<!-- Accent-colored raised button -->
<a href="product.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
 +ADD PRODUCT</a>


</body>
</html>







<h1>Admin Panel</h1>

<?php
	//Code to connect to the DB
	
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
	$results = mysqli_query($conn,$query);
	
	//5. SHOW the DATABASE RESULT SOMEWHERE
		//	var_dump($result);
		/*
		foreach($x in $result)
		{
			print($x);
		}
		*/
	
	
	//loop through the database result
		while( $product = mysqli_fetch_assoc($results))
		{
			//show all database
			print_r($product);
			echo "<br>";
			//print firstname
			echo $product["p_id"] . "<br>";
			echo $product["name"] . "<br>";
			echo $product["price"] . "<br>";
			echo $product["description"] . "<br>";
			
			
		}
	
	//6.DISCONNECT DATABASE
	mysqli_free_result($results);    //clean up your row variable
	mysqli_close($conn);     //close connection
	
?>

