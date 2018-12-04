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
				<!-- submit button to get purchases  -->
		<input type = "submit" value = "Get Purchases">
</form>

<!-- Q2 -->
<p> 2. How do you want to order the products? </p>

<form action= "Q2.php" method= "post">

		<p> Select which order you want: </p>
		<input type = "radio" name = "ascending" value = "ASC"> Ascending <br>
		<input type = "radio" name = "descending" value = "DESC"> Descending <br>

		<p> Select if you want to order by price or name: </p>
		<input type = "radio" name = "price" value = "PRICE"> Price <br>
		<input type = "radio" name = "name" value = "NAME"> Name <br>

		<!-- submit button to reorde -->
		<input type = "submit" value= "Submit">

</form>
</body>
</html>
