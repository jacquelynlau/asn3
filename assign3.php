<!DOCTYPE html>
<!-- this is like the index file -->
<html>
<head>
	<title> 3319 A3 Store Database </title>
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

		<p> Select if you want to ascending order or descending order: </p>
		<input type = "radio" name = "ascending" value = "ASC"> Ascending <br>
		<input type = "radio" name = "descending" value = "DESC"> Descending <br>

		<p> Select if you want to order by price or name: </p>
		<input type = "radio" name = "price" value = "PRICE"> Price <br>
		<input type = "radio" name = "name" value = "NAME"> Name <br>

		<!-- submit button to reorde -->
		<input type = "submit" value= "Submit">
</form>

<!-- Q3 -->
<p> 3. Insert a new purchase: </p>

<form action = "Q3.php" method = "post">

<p> Select the customer: </p>

<?php
		    include 'connecttodb.php';
		  	$query = "SELECT * FROM Customer GROUP BY lastName;";
		  	$result = mysqli_query($connection,$query);

		 	if (!$result) {
		        	die("databases query failed");
		 	}

			while ($row = mysqli_fetch_assoc($result)) {
		    echo "<ul>";
		    echo '<input type="radio" name="customer3" value="';
		           echo $row["customerID"];
		           echo '">'. $row["firstName"]. " " .$row["lastName"];
		           echo " -- Customer ID: " . $row["customerID"];
		    echo "</ul>";
			}

mysqli_free_result($result);
mysqli_close($connection);
?>

<p> Select the product: </p>

<?php
		    include 'connecttodb.php';
		  	$query = "SELECT * FROM Product;";
		  	$result = mysqli_query($connection,$query);

		 	if (!$result) {
		        	die("databases query failed");
		 	}

			while ($row = mysqli_fetch_assoc($result)) {
		    echo "<ul>";
		    echo '<input type="radio" name="product3" value="';
		           echo $row["productID"];
		           echo '">'. $row["description"]. " " .$row["quantity"];
		           echo " -- Product ID: " . $row["productID"];
		    echo "</ul>";
			}

mysqli_free_result($result);
mysqli_close($connection);
?>

</form>
</body>
</html>
