<!DOCTYPE html>
<html>
<body>

	<?php
	include 'connecttodb.php';
	?>

	<h1> Here are the </h1>


	<ol>
		<?php
		$whichCustomer = $_POST["customer"];
		$query = 'SELECT * FROM Product JOIN Purchases ON Product.productID = Purchases.productID AND Purchases.customerID = "'.$whichCustomer.'"';

		$result = mysqli_query($connection,$query);
		while ($row=mysqli_fetch_assoc($result)) {
			echo '<li>';
			echo $row["description"];
			echo '</li>';
		}



		if (!$result) {
			die("database query2 failed.");
		}
		mysqli_free_result($result);

		?>
	</ol>
	<?php
	mysqli_close($connection);
	?>
</body>
</html>
