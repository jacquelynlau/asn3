<!DOCTYPE html>
<html>
<body>
<?php
	include 'connecttodb.php';
?>

<h1> Here are the purchases: </h1>

<ol>
	<?php
		$whichCustomer = $_POST["customer"];

		//get purchases and print them
		$query = 'SELECT * FROM Product JOIN Purchases ON Product.productID = Purchases.productID AND Purchases.customerID = "'.$whichCustomer.'"';
		$result = mysqli_query($connection,$query);
		while ($row=mysqli_fetch_assoc($result)) {
			echo '<p>';
			echo "". $row["quantity"]. " " .$row["description"];
			echo '</p>';
		}

		//if unsuccessful, trigger error message
		if (!$result) {
			die("database query failed");
		}

		mysqli_free_result($result);
	?>
</ol>

<?php
	mysqli_close($connection);
?>

<br>
<!-- go home link -->
<a href="assign3.php">Go Home</a>

</body>
</html>
