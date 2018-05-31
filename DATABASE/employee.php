<h1>Connecting to Database</h1>

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
	$query = "select * from employees"; 
	
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
		while( $employee = mysqli_fetch_assoc($results))
		{
			//show all database
			print_r($employee);
			echo "<br>";
			//print firstname
			echo $employee["Id"] . "<br>";
			echo $employee["firstname"] . "<br>";
			echo $employee["lastname"] . "<br>";
			echo $employee["department"] . "<br>";
			
			
		}
	
	//6.DISCONNECT DATABASE
	mysqli_free_result($results);    //clean up your row variable
	mysqli_close($conn);     //close connection
	
	

?>

