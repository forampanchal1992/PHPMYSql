<h1>HELLO!!!!</h1>
<h2>This is next page</h2>

<?php
	////build to check a simple program to check if the person came to this page using a GET or POST request
	
	//most output
	//echo "asdfsaf";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//POST
		echo "The student is : " .$_POST["studentName"]."<br>";
	echo "The ID is : " .$_POST["id"]."<br>";
		echo "You came with a  POST";
	}
	else if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		//GET
		echo "The student is : " .$_GET["studentName"]."<br>";
	echo "The ID is : " .$_GET["id"]."<br>";
		echo "You came with a  GET";
	}
	//print_r($_SERVER); 
	
	
	//Get data from form
	echo "<br> WHats the GET? <br>";
	print_r($_GET);
	
	echo "<br> WHats the POST? <br>";
	print_r($_POST) ."<br>";
	
	
	
?>