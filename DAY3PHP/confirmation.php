<?php
	//echo "HELLO";
	//LOGIC AWESOME
	print_r($_POST);
	
	//test for error condittions
		
		$name = $_POST["firstname"];
		$email = $_POST["email"];
		$cc = $_POST["cc"];
		
	
	//1.check if fields are blank
			/*$x = "hello";
			if($x = "")
			{
				
			}*/
		if(empty($name) || empty($email) || empty($cc))
		{
			echo "NAME , email or cc is blank";
		}
	
	//2. check if credit card is valid
		if(strlen($cc) != 16)
			{
				echo "<br> CRedit card number must be 16 digits <br>";
			}
		if(ccIsValid($cc) == false)
		{
			echo "Credit card is INVALID";
		}
		else{
			echo "Valid CREDIT CARD";
		}
		// check if credit card passes validation
		function ccIsValid($cc){
		//$cc = "6046460479341256";
			//echo $cc;
			//if 16 digits
			if(strlen($cc) == 16)
			{
				
				//0. reverse the CC number so all the position match the algorithm
				$reversed = strrev($cc);
				//echo "Reversed the string:" .$reversed." <br>";
				
				//1.loop through ther numbers in cc
				$total = 0;
				for($i=0;$i<16;$i++)
				{
					//echo $reversed[$i]."<br>";
				
				//2. if position = odd
				//2a multiply by 2
				//2b  if multiply > 9 , then convert 
				//     otherwise , do nothing
				if($i % 2 == 1){
					//do multiply + convert
					$num = $reversed[$i] * 2;
					if($num > 9)
					{
						//conersion
						$num = $num - 9;
					}
					
				}
				else
				{
					//do nothing
					$num = $reversed[$i];
				}
				//echo"----Converted number : " .$num ."<br>";
				
				
				//3.  add to total!!!
					$total = $total + $num;
				}
				//end for loop
					//4. after looping , do total % 10
					
					if($total % 10 ==0)
					{
						//echo"VALID CREDIT CARD";
						return true;
					}
					else
					{
						//echo"INVALID";
						return false;
					}
					
					//5. if total % 10 ==0 , WINNER!!!!!!
				
			}
			/*else{
						return false;
					}
					*/
		}
	//2a. check if cc is 16 digits
	
	//2b. Does cc pass algorithm
	
	//if all conditions PASS, then SHOW SUCCESS message
	echo"<h2> Hey, " .$name ."!<br>";
	echo "Thanks for your Copy.... " . "<br>";
	echo "We sent a copy of your recipt to :";
	echo "<span style='color:red'; text-decoration:none>";
	echo "$email";
	echo "</span>";
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Confirmation!!!!!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">
        Order Confirmation
      </h1>
      <a href="checkout.php" > Go Back </a>
    </div>
  </section>
  </body>
</html>