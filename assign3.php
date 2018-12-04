<!DOCTYPE html>
<!-- this is like the index file -->
<html>
<head>
	<title> Store Database </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>

<?php
	include "connecttodb.php";
?>

<h1> Assignment 3 Database </h1>

</div>
	<div class ="main">
</div>

<!-- Q1 -->
  <form action = "Q1.php" method = "post">
		<?php
				include "getcustomers.php";
		?>
				<input type = "submit" value = "Get Purchases">
  </form>

<!-- Q2 -->
<p> Select how you want to order the product: </p>

<form action="Q2.php" method="post">
	<?php
		include "reorder.php";
	?>
<input type = "submit" value = "Reorder Table">

</form>

		<!-- organize by ascending or descending order button -->
		<select name = "description">
	  	<option value = "ASC"> Ascending </option>
	  	<option value = "DESC"> Descending </option>
		</select>

		<!-- organize by price or name button -->
		<select name = "type">
	  	<option value = "price"> Price </option>
	  	<option value = "name"> Name </option>
		</select>

		<!-- reorder the products button -->
		<input name = "reorder" type ="submit" value = "Reorder Table"/>
	</form>


</body>
</html>
