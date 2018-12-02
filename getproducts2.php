<?php
  	$query = "SELECT * FROM Product ORDER BY description ASC";
  	$result = mysqli_query($connection,$query);
 	if (!$result) {
        	die("databases query failed.");
 	}

	echo " Products:</br>";
	echo "<table border = '1'>
	<tr>
	<th> Product ID </th>
	<th> Description </th>
	<th> Cost Per Item </th>
	<th> Quantity </th>
	</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		echo "<td>".$row ["productID"]."</td>";
		echo "<td>" . $row["description"] . "</td>";
		echo "<td>" . $row["costPerItem"] . "</td>";
		echo "<td>" . $row["quantity"] . "</td>";
		echo "</tr>";
	}
	echo "</table>";

	mysqli_free_result($result);
?>




?>
