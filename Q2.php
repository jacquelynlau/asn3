<?php
	include 'connecttodb.php';

  if(isset($_POST["price"]) && isset($_POST["ascending"])){
   $query = "SELECT * FROM product ORDER BY " . $_POST["price"] . " " . $_POST["ascending"] ;
   }
    $result = mysqli_query($connection,$query);

    if (!$result) {
         die("databases query failed.");
     }
    echo "</br>So many products</br>";
    echo "<table align='center'>";
    echo "<th>Product Name</th>";
    echo	"<th>Price</th>";			//create a table
    echo	"<th>Quantity Left</th>";
    while ($row = mysqli_fetch_assoc($result)) {
         echo "<tr>";
         echo "<td>" . $row['description'] . " </td>";
 	echo "<td>" . $row['cost'] . " </td>"; //place the info into the table
 	echo "<td>" . $row['quantity'] . " </td>";
 	echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
 ?>
