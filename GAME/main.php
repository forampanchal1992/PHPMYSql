<?php
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		//generate new words
		
		//Read Words from the file
	$file = file_get_contents("simpleword.txt", true);
	$words = str_word_count($file, 1);
		//print_r($words);
	
	//Randomly pick words from arrray?
			//print_r(array_rand($words,10));
	$length = count($words);
	
	$picked = []; //Put all position in the array
	$choices = []; //these are 10 randomly number you choose
		for($i=0;$i<10;$i++)
			{
		
				
				while(1)
				{
				//Pick A Random Number
				$randomNumber = rand(0, $length - 1);
				
				//Check if random number already picked
				if(in_array($randomNumber,$picked) == true) {
					continue;
					//Skip
				} 
				else {
						array_push($choices, $words[$randomNumber]);
						break;
				}
				//Check if you picked this position already
				
				//If you picked the position already
				//Then pick a new randon number
				
				echo $words[$randomNumber]."<br>";
				}
			}
		//pick a random wqord to be a password!!!!
			//option 1.$X= rand(0,count($choices));
			//option 2./ $x = rand(0,10);
			$X= rand(0,count($choices)-1);
			
			$password = $choices[$X];
		
		echo "Random word : ".$password ."<br>";
	}
	else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// 1. get the word from UI
		$guess = $_POST["guess"];
		echo $guess . "<br>";
		//2.Compare the guess to password!!!!
		if($guess == $password)
		{
				echo "WINNER!!!!";
		}
		else{
			$correct = 0;
		for($i = 0; $i < 4;$i++)
			{
					if($guess[$i] == $password[$i])
					{
						$correct = $correct + 1;
					}
			}
			echo "Number of correct letters: ".$correct;
		}
	
	
	}
	
	
	
	
?>


<html>
<head>
</head>
<body>
<form action="main.php" method="POST">

<label>Enter a WORD:</label>
<input name="guess" type="text">

<button type="submit">GO</button>
</form>
</body>
</html>