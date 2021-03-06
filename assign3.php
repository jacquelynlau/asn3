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
<h3> 2. How do you want to order the products: </h3>

<form action= "Q2.php" method= "post">

		<p> Select if you want to ascending order or descending order: </p>
		<input type = "radio" name = "ascending" value = "ASC"> Ascending <br>
		<input type = "radio" name = "descending" value = "DESC"> Descending <br>

		<p> Select if you want to order by price or name: </p>
		<input type = "radio" name = "price" value = "PRICE"> Price <br>
		<input type = "radio" name = "name" value = "NAME"> Name <br>

		<!-- submit button to reorder -->
		<input type = "submit" value= "Submit">
</form>

<!-- Q3 -->
<h3> 3. Insert a new purchase: </h3>

<form action = "Q3.php" method = "post">

<!-- lists the customers with radio button on side -->
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

<!-- lists the products with radio button on side -->
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
		           echo '">'. $row["description"];
		           echo " -- Product ID: " . $row["productID"];
		    echo "</ul>";
			}

mysqli_free_result($result);
mysqli_close($connection);
?>
    <!-- enter the quantity -->
		<input type="text" name="quantity" placeholder="Enter Quantity">
		<br>
		<br>

		<!-- submit button to add new purchase -->
		<input name = "submit" type = "submit" value = "Add New Purchase">
</form>


<!-- Q4 -->
<h3> 4. Add a new customer: </h3>

<form action = "Q4.php" method = "post">

	<!-- enter the customer information -->
	<input type="text" name="customerID" placeholder="enter Customer ID">
	<br>
	<input type="text" name="firstname" placeholder="enter First Name">
	<br>
	<input type="text" name="lastname" placeholder="enter Last Name">
	<br>
	<input type="text" name="city" placeholder="enter City">
	<br>
	<input type="text" name="phonenumber" placeholder="enter Phone Number">
	<br>

	<!-- submit button to add new customer -->
	<input name = "submit4" type = "submit" value = "Add New Customer">
</form>



<!-- Q5 -->
<h3> 5. Update a customer's phone number: </h3>

<form action = "Q5.php" method = "post">

<!-- lists the customers with radio button on side -->
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
		    echo '<input type="radio" name="customer5" value="';
		           echo $row["customerID"];
		           echo '">'. $row["firstName"]. " " .$row["lastName"];
		           echo " -- Customer ID: " . $row["customerID"];
		    echo "</ul>";
			}

mysqli_free_result($result);
mysqli_close($connection);
?>

<!-- enter the phone number to update -->
<input name="phonenumber5" type="text" placeholder="Enter Phone Number">
<br>

<!-- submit button to update phone number -->
<input name = "submit5" type = "submit" value = "Update Phone Number">
</form>



<!-- Q6. Delete a customer -->
<h3> 6. Delete a customer: </h3>

<form action = "Q6.php" method = "post">

<!-- lists the customers with radio button on side -->
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
		    echo '<input type="radio" name="customerdelete" value="';
		           echo $row["customerID"];
		           echo '">'. $row["firstName"]. " " .$row["lastName"];
		           echo " -- Customer ID: " . $row["customerID"];
		    echo "</ul>";
			}

mysqli_free_result($result);
mysqli_close($connection);
?>

<!-- submit button to delete customer -->
<input name = "submit6" type = "submit" value = "Delete Customer">
</form>


<!-- Q7.  -->
<h3> 7. List the customers who have bought more than a give quantity: </h3>

<form action = "Q7.php" method = "post">
		<!-- enter the quantity you want to check -->
		<input name="quantity7" type="text" placeholder="Enter Quantity">
		<br>
		<!-- submit button to find -->
		<input name = "submit7" type = "submit" value = "Find">
</form>


<!-- Q8. List products not purchased -->
<h3> 8. List the products that have not been purchased: </h3>

<form action = "Q8.php" method = "post">

		<!-- submit button to go to list of products not purchased -->
		<input name = "submit8" type = "submit" value = "Go to list!">
</form>

<!-- Q9. List total number of purchases for a particular product -->
<h3> 9. List the total number of purchases for a particular product: </h3>

<form action = "Q9.php" method = "post">

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
			    echo '<input type="radio" name="product9" value="';
			           echo $row["productID"];
			           echo '">'. $row["description"];
			           echo " -- Product ID: " . $row["productID"];
			    echo "</ul>";
				}

	mysqli_free_result($result);
	mysqli_close($connection);
	?>

	<!-- submit button to get list -->
	<input name = "submit9" type = "submit" value = "Submit">

</form>



</body>
</html>
