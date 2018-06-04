<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body>

	<h1>Add Product</h1>
	<h2>Enter new product</h2>
	
	<!-- Accent-colored raised button -->
<a href="admin.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
 < GO BACK</a>
	<!--FORM TAG-->
	
	<form action="#">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Product Name</label>
  </div>
  <br>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Description</label>
  </div>
  <br>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4">
    <label class="mdl-textfield__label" for="sample4">Price</label>
    <span class="mdl-textfield__error">Input is not a number!</span>
  </div>
  <br>
  
</form>
			
		<!-- Accent-colored raised button -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
 +ADD PRODUCT
</button>
	

</body>
</html>