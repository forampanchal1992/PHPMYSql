<?php

	session_start();
	define("TOTAL_WORDS", 10);

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		//..........lets do max attempt
		$_SESSION["attempt"] = 4;
		
		
		// --------- generate new words
		
		
		// read words from a file and put in array
		$file = file_get_contents("simpleword.txt", true);
		$words = str_word_count($file, 1);

		
		// get lenght of array
		$length = count($words);
		
		//pick 10 random words
		$positions = array_rand($words, TOTAL_WORDS);
		$choices = [];
		for ($i = 0; $i < count($positions); $i++) {
		  $x = $positions[$i];
		  array_push($choices, $words[$x]);
		}	
		var_dump($choices);
		
		echo "=================<br>";
		
		//store session 
		$_SESSION["choices"] = $choices;
		
		// pick a random word to be a password!
		// OPTION 1: $x = rand(0, count($choices)-1);
		// OPTION 2: $x = rand(0, 10);
		$x = rand(0, count($choices)-1);
		$_SESSION["password"]  = $choices[$x];
		
		
		// print out the words choices
		for ($j=0; $j < count($choices); $j++) {
			echo $choices[$j] . "<br>";
		}
		
		echo "random password: ".  $_SESSION["password"] ."<br>";
	}
	else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		var_dump($_SESSION["choices"]);
		print_r($_SESSION["choices"]);
		$choices = $_SESSION["choices"];
		echo "<ul>";
		for($i =0 ; $i <count($choices);$i++)
		{
			echo"<li>";
			echo $choices[$i] . "<br>";
			echo "</li>";
		}
		echo"</ul>";
		
		echo "============<br>";
		
		// 1. get the word from the UI
		$guess = $_POST["guess"];
		echo $guess . "<br>";
		
		// 2. Compare the guess to the password;
		if ($guess == $_SESSION["password"]) {
			//correct
			echo "WINNER!";
		}
		else {
			if($_SESSION["attempt"] == 0)
			{
				
				echo "GAME OVER!!!! <br>";
			}
			else{
				//wrong
			/*
			1.are they out of atempt
			2.
			*/
			
			
						
			$correct = 0;
			for ($i = 0; $i < 4; $i++) {
				if ($guess[$i] == $_SESSION["password"][$i]) {
					$correct = $correct + 1;
				}
			}
			echo "Number of correct letters: " . $correct . "<br>";
			
			$_SESSION["attempt"] = $_SESSION["attempt"] -1;
			echo "You have : " .$_SESSION["attempt"] . "left <br>";
			}
			
		}
	}




	
?>



<html>
<head>
<!--link rel="stylesheet" type="text/css" href="css/skeleton.css"-->
</head>
<body>

<form action="main.php" method="POST">
	<label> Enter a word: </label>
	<input name="guess" type="text">
	<button type="submit">Go!</button>
	<br>
	<a href="main.php">Start a new Game</a>
</form>

</body>
</html>

