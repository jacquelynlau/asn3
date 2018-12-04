<!DOCTYPE html>
<html>
<body>

<?php
	include 'connecttodb.php';
?>

<h1> Here are the purchases: </h1>

<li>
	<?php
		$whichCustomer = $_POST["customer"];
		$query = 'SELECT * FROM Product JOIN Purchases ON Product.productID = Purchases.productID AND Purchases.customerID = "'.$whichCustomer.'"';
		$result = mysqli_query($connection,$query);
		while ($row=mysqli_fetch_assoc($result)) {
			echo '<p>';
			echo "". $row["quantity"]. " " .$row["description"];
			echo '</p>';
		}

		if (!$result) {
			die("database query2 failed.");
		}

		mysqli_free_result($result);
	?>
</li>

<?php
	mysqli_close($connection);
?>

<br>
<!-- go home link -->
<a href="assign3.php">Go Home</a>

</body>
</html>
