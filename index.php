<h1>PHP BASIC</h1>
<?php

//your code goes here

//comments
/* comments*/
$x = 25;
$y = "FORAM";
$z = 30.99;

//output to the screen

//echo "<h2 style='color:red'>HELLO</h2>";
//echo "Hello" . "GoodBye!!!" . "HAve a Good Day";

//echo $x + $z;

//if statements
/*
$abc = 30;
if($abc < 25)
{
	echo "Hello";
}
else if($abc > 27){
	echo "APPPPP!!!";
}
else{
	echo "GOODBYE!!!!";
}
*/

//for-loop   --> while loop?
//for-loop :
// repeats fix number of times
//you tell the loop how many times you wanna loop
//while:
//--loop that repeats until a condition is met.
//--doesnt stop until a condition

for($i=0;$i <5;$i++)
{
	echo "HELLOOOO<br>";
	
}
/*
for(int i = 0; i< 5;i++){
	System.out.println("HIIII");
}
*/


//while loop
$b = 5;
while($b < 8){
	echo "BYEE! <br>";
	$b = $b +1;
}

//function -- creating function
function sayHEllo(){
	echo "ABCCCC<br>";
	echo "ANANAS<br>";
	echo "PINEAPPLE <br>";
}

function pineapple($language){
if($language == "Gujarati" || $language == "punjabi")
	{
		echo("ANANAS");
	}
	else if($language == "malayalam")
	{
		echo "KAITHACHAKA";
	}
	else if($language == "br")
	{
		echo "ABACAXI";
	}
	else if($language == "viet")
	{
		echo "DUA";
	}
	else
	{
		sayHEllo();
	}
}

//USING a FUNCTION
//sayHEllo();
/*
pineapple("English");

$w = "viet";
pineapple($w);
*/

///ARRRAYS......
//Create an empty array 
$animals = [];
$animals = array();

//add thing to array
$animals[0] = "goat";
$animals[1] = "cat";

//another way to add to array
//this will add to ewns of array
array_push($animals, "Tiger");


//length of array
/*
echo "The length of array is : ".count($animals). "<br>";

for($j = 0 ;$j <count($animals) ; $j++)
{
	echo "HELLO : " .$animals[$j] . "<br>"; 
}
*/

//ASSOCIATIVE ARRAY
$easy = array(
	"en" => "easy",
	"fr" => "facile",
	"vt" => "de",
	"br" => "facil",
	"my" => "elupam",
	"gu" => "saral",
	"pu" => "sokha"
	);
print_r($easy);

//single item from dictionary
echo $easy["fr"] . "<br>";

//looping through as associate array
foreach($easy as $k => $v)
{
	echo "KEy is : " .$k . "<br>";
	echo "VAlue is : " .$v . "<br>";
	echo "---------: " . "<br>";
	
}

/*
for($j = 0; $j <10;$j++)
{
	array_push($animals , "CoW");
}

//clear ypur array
$animals = [];
//command for outputting arrays to screen
print_r($animals);
//echo $animals;
*/



?>

