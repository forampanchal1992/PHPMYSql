








<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">
        Checkout</h1>
      <p class="subtitle">
        Fill in the form fields below
      </p>
	  <form action="confirmation.php" method="POST">
	  <div class="field">
	   <label class="label">Name</label>
	   <p class="control has-icons-left has-icons-right">
	 	<input class="input" type="text" name="firstname" placeholder="Enter your Name">
		<span class="icon is-small is-left">
		 <i class="fas fa-user"></i>
		 </span>
		 </p>
	 
	</div>
	
	<div class="field">
	 <label class="label">Email</label>
	 <p class="control has-icons-left has-icons-right">
		<input class="input" type="text" name="email" placeholder="Email">
		<span class="icon is-small is-left">
		<i class="fas fa-envelope"></i>
		</span>
		</p>
	  	</div>
	
	<div class="field">
	  <label class="label">Credit Card Number</label>
	  <p class="control has-icons-left has-icons-right">
		<input class="input" type="text" name="cc" placeholder="Credit Card">
		
		<span class="icon is-small is-left">
		<i class="far fa-credit-card"></i>
		</span>
		</p>
		
	</div>

	  
	  <div class="field">
	  <p class="control">
		<button class="button is-success">
		  Submit
		</button>
	  </p>
	</div>
	  </form>
	  
	  
    </div>
  </section>
  </body>
</html>