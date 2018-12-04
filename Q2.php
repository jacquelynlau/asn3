<?php
   include 'connecttodb.php';
   $query = "SELECT * FROM Product ORDER BY description ASC";//default setting
   if(isset($_POST["type"]) && isset($_POST["order"])){//if the user chooses, get new ordering
   $query = "SELECT * FROM Product ORDER BY " . $_POST["type"] . " " . $_POST["order"] ;
   }
   $result = mysqli_query($connection,$query);

   if (!$result) {
        die("databases query failed.");
    }
   
   echo "<table>";
   echo "<th>Product Name</th>";
   echo	"<th>Price</th>";			//create a table
   echo	"<th>Quantity Left</th>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['description'] . " </td>";
	echo "<td>" . $row['costPerItem'] . " </td>"; //place the info into the table
	echo "<td>" . $row['quantity'] . " </td>";
	echo "</tr>";
   }
   echo "</table>";
   mysqli_free_result($result);
?>
