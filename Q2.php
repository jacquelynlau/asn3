<?php

  include 'connecttodb.php';

  if(isset($_POST["type"]) && isset($_POST["order"])){//if the user chooses, get new ordering
   $query = "SELECT * FROM Product";
   }

   $result = mysqli_query($connection,$query);

   if (!$result) {
        die("databases query failed.");
    }

    while ($row = mysqli_fetch_assoc($result)) {
              echo '<li>' . 'Product ID: ' . $row["productID"] . ', Name: ' . $row["description"] . ', Cost: ' . $row["costPerItem"] . ', Quantity: ' . $row["quantity"];
            }

  // echo "</br>So many products</br>";
  // echo "<table align='center'>";
  // echo "<th>Product Name</th>";
  // echo	"<th>Price</th>";			//create a table
  // echo	"<th>Quantity</th>";

   //while ($row = mysqli_fetch_assoc($result)) {
    //    echo "<tr>";
    //   echo "<td>" . $row['description'] . " </td>";
	//echo "<td>" . $row['costPerItem'] . " </td>"; //place the info into the table
	//echo "<td>" . $row['quantity'] . " </td>";
	//echo "</tr>";

   //echo "</table>";
   mysqli_free_result($result);

 mysqli_close($connection);

?>
