<!DOCTYPE html>
<html>
<body>

<h1> Total number of purchases for a particular product: </h1>

<?php

//get total number of purchases for that product selected
$whichProduct = $_POST["product9"];


 $query = 'SELECT SUM(quantity) as total FROM Purchase WHERE productID=' . $whichProduct . ' GROUP BY productID';
 //$query = 'SELECT SUM(quantity) FROM CustomerPurchases WHERE Purchases.productID = (SELECT Product.productID FROM Product WHERE Product.description="' . $whichProduct . '")';
 $result = mysqli_query($connection, $query);
 $amount = mysqli_fetch_assoc($result);

 echo $amount["total"];

 if (!$result) {
                die("databases query failed.");
            }








mysqli_free_result($result);



mysqli_close($connection);









 ?>



</html>
</body>
