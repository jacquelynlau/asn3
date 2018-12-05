<!DOCTYPE html>
<html>
<body>

<h1> Total number of purchases for a particular product: </h1>

<?php

//get total number of purchases for that product selected
$whichProduct = $_POST["product9"];
 $query = 'SELECT SUM(quantity) FROM CustomerPurchases WHERE Purchases.productID = (SELECT Product.productID FROM Product WHERE Product.description="' . $whichProduct . '")';

 $result = mysqli_query($connection,$query);

 if (!$result) {
                die("databases query failed.");
            }

$row = mysqli_fetch_assoc($result);
                     echo '<p>total quantity of products purchased ';
                     echo $row["SUM(quantityPurchased)"];
                     echo '</p>';









mysqli_free_result($result);



mysqli_close($connection);









 ?>



</html>
</body>
