<?php

	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "GET" ) {
		//echo "Creating a new game! <br>";
		
		$_SESSION["password"] = "HELLO";
		$_SESSION["name"] = "FORAM";
		$_SESSION["plots"] = "brace yourself";
		echo "password:! ".$_SESSION["password"];
		
		
	}
	else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "Your guess is: " . $_POST["guess"];
		echo "<br>This is wrong! ";
		print_r($_SESSION);
	}
	
?>
<html>
<head>
	<title> Single page refresh! </title>
</head>
<body>

	<br>
	
	<form method="POST" action="single-page.php">
		What's your guess? 
		<input type = "text" name="guess" placeholder="enter guess">
		<button type="submit">Submit </button>
	</form>
	
	<a href="single-page.php">Create a new game </a>
</body>
</html>