<?php
	include("header.php");
	
	$dbhost = "localhost";     //address of your database
	$dbuser = "root";
	$dbpassword = "";            //on MAMP, this is "root"
	$dbname = "madt3134";      ///name of database
  	
	
	//2,connect to Database
	$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
	
	$query = "select * from product";
	$result = mysqli_query($conn,$query);
	
?>

    <!-- BACKPACKS and BAGS -->
    <section class="section">
      <div class="container">
        <h1 class="title">Backpacks & Bags</h1>
        <h2 class="subtitle">
          A selection of awesome backpacks for your everyday commute.
        </h2>
      </div>
    </section>

    <section class="section">
      <div class="container">
		<?php
			while($product = mysqli_fetch_assoc($result))
			{
				?>
					
					<img src="images/burnt-toast-donut.jpg">
					<p> <?php echo $product['name']?></p>
					<p> <?php echo $product['price']?></p>
					<p> <?php echo $product['description']?></p>
				<?php
			}
		?>
        <!-- put your products in here -->
      </div>
    </section>
	<script type="text/javascript">
    </script>
  </body>
</html>