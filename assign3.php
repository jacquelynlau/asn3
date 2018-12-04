<!DOCTYPE html>
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
  <form action = "getproducts1.php" method = "post">
		<?php
				include "getcustomers.php";
		?>
				<input type = "submit" value = "Get Purchases">
  </form>


	<form action="reorderbydescription.php" method="post">

		<!-- organize by ascending or descending order button -->
		<select name = "description">
	  	<option selected = "selected" value = "ASC"> Ascending </option>
	  	<option value = "DESC"> Descending </option>
		</select>

		<!-- organize by price or name button -->
		<select name = "type">
	  	<option selected = "selected" value = "price"> Price </option>
	  	<option value = "name"> Name </option>
		</select>

		<!-- reorder the products button -->
		<input name = "submit" type ="submit" value = "Reorder Table"/>
	</form>

	<?php
		include "reorderbydescription.php";
	?>

</body>
</html>
