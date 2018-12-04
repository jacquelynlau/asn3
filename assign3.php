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

<form action= "Q2.php" method = "post">
	<?php
			include "reorder.php";
	?>
			<input name = "reorder" type = "submit" value = "Reorder Table">
</form>


</body>
</html>
