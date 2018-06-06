<?php
	echo "HELLO LOCATIONS";
	
	//1. connect to database
	$dbhost = "localhost";		// address of your database
	$dbuser = "root";
	$dbpassword = "";			// on MAMP, this is "root"
	$dbname = "store";
	
	// 2.  CONNECT TO THE DATABASE
	$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
	
	//3.Query 
	$query = "SELECT * from locations";
	
	//4.grab all loactions.....
	$results = mysqli_query($conn, $query);
	
	//print_r($results);
	$store = array();
	
	
	while( $item = mysqli_fetch_assoc($results) ) {
		//print_r($store);
		//add all item to store
		array_push($store,$item);
	}
	
	//............3. return to loactions as JSON
	
	//tell the browser we are sending json
	header("Content-Type: application/json");
	
	//convert our array into json dictionary
	$json = json_encode($store);
	
	
	//deal with any stores during the conversation
	////NOTE: This is error handling NONSENSE 
	if($json == false)
	{
		$errorMessage = array("error"=>json_last_error_msg() );
		$json = $json_encode($json);
		http_response_code(500);
	}
	echo $json;
	
	
	
	
	

?>