<p>check credit card number</p>
<?php
	//check if cc is 16 digit
	
	//$cc = "4688631458814460";
	$cc = "6046460479341256";
	echo $cc;
	//if 16 digits
	if(strlen($cc) == 16)
	{
		
		//0. reverse the CC number so all the position match the algorithm
		$reversed = strrev($cc);
		echo "Reversed the string:" .$reversed." <br>";
		
		//1.loop through ther numbers in cc
		$total = 0;
		for($i=0;$i<16;$i++)
		{
			echo $reversed[$i]."<br>";
		
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
				echo"VALID CREDIT CARD";
			}
			else
			{
				echo"INVALID";
			}
			//5. if total % 10 ==0 , WINNER!!!!!!
		
	}
?>











<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
</head>
<body>
<form action="" method="POST">
	<div class="container">
	<div class="col-md-6">
	<div class="form-group">
	FName: <input type="text" class="form-control" name="fname">
	</div>
	<div class="form-group">
	LName: <input type="text" class="form-control" name="lname">
	</div>
	<div class="form-group">
	Email: <input type="text" class="form-control" name="email">
	</div>
	<div class="form-group">
	Credit Card: <input type="text" class="form-control" name="credit">
	</div>
	<div>
	<i class="fab fa-cc-visa"></i>
	<i class="fab fa-cc-mastercard" id="master"></i>
	<input type="text" class="form-control" name="visa" id="visa">
	</div>
	<button type="submit">SUBMIT</button>
	</div>
	</div>
</form>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function (){
				$('#visa').keyup(function ()
				{
					
					var a = $('input#visa').val();
					//console.log(a);
					var b = a.substring(0,2);
					console.log(b);
					
					
					
				})
			});
		</script>
</body>
</html>