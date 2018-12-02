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





  <form action = "getproducts1.php" method = "post">

	<?php
			include "getcustomers.php";
	?>
	
	<input type = "submit" value = "Get Purchases">

  </form>

<?php
		include "reorderproducts.php";
?>


</body>
</html>
