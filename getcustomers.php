<?php
    include 'connecttodb.php';
  	$query = "SELECT * FROM Customer GROUP BY lastName;";
  	$result = mysqli_query($connection,$query);

 	if (!$result) {
        	die("databases query failed");
 	}

	echo "Select the customer you are looking up: </br>";

	while ($row = mysqli_fetch_assoc($result)) {
    echo "<ul>";
      echo '<input type="radio" name="customer" value="';
           echo $row["customerID"];
           echo '">'. $row["firstName"]. " " .$row["lastName"];
           echo "<br>";
           echo $row["phoneNumber"];
           echo "<br>";
           echo $row["city"];
           echo "<br>";
           echo $row["agentID"];
    echo "</ul";
		//echo '<input type = "radio" name = "customername" value = "';
		//echo "<td>".$row ["customerID"]."</td>";
		//echo '"></td><td>'. $row["customerID"] . "</td>";
		//echo "<td>" . $row["firstName"] . "</td>";
		//echo "<td>" . $row["lastName"] . "</td>";
		//echo "<td>" . $row["phoneNumber"] . "</td>";
		//echo "<td>" . $row["city"] . "</td>";
		//echo "<td>" . $row["agentID"] . "</td>";
		//echo "</tr>";
	}
	echo "</table>";
	mysqli_free_result($result);
  mysqli_close($connection);
?>
