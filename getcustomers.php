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
           echo "Customer ID: " . $row["customerID"];
           echo "<br>";
           echo "Phone Number: " . $row["phoneNumber"];
           echo "<br>";
           echo "City: " . $row["city"];
           echo "<br>";
           echo "Agent ID: " . $row["agentID"];
    echo "</ul>";
	}
	mysqli_free_result($result);
  mysqli_close($connection);
?>
