<!DOCTYPE html>
<html>
<body>

	<?php
	include 'connecttodb.php';
	?>

	<h1> Here are their purchases: </h1>


	<ol>
		<?php
		if (isset($_POST["submit"])) {
		$whichCustomer = $_POST["customer"];
		$query = 'SELECT * FROM Purchases, Product WHERE Product.customerID = Purchases.customerID AND Product.customerID="'.$whichCustomer.'"';



		$result = mysqli_query($connection,$query);
		if (!$result) {
			die("database query2 failed.");
		}

		while ($row=mysqli_fetch_assoc($result)) {
			echo '<li>';
			echo $row["description"];
			echo '</li>';
		}
		mysqli_free_result($result);
	}
		?>
	</ol>
	<?php
	mysqli_close($connection);
	?>
</body>
</html>
