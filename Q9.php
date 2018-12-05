<!DOCTYPE html>
<html>
<body>

<h1> Total number of purchases for a particular product: </h1>

<?php

$whichProduct = $_POST["product9"];

//get total number of purchases for that product selected
$query = 'SELECT SUM(quantityPurchased) as total FROM Purchases WHERE productID=' . $whichProduct . ' GROUP BY productID';
$result = mysqli_query($connection,$query);

if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {//display total sales
        echo $row["description"] . " sales: $" . $row["quantityPurchased"] * $row["costPerItem"];
   }
   mysqli_free_result($result);
   mysqli_close($connection);









 ?>



</html>
</body>
