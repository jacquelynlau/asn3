<!DOCTYPE html>
<html>
<body>

<h1> Total number of purchases for a particular product: </h1>

<?php
   include 'connectdb.php';
   $query = "SELECT description, cost, SUM(PurchaseS.quantity) as sales FROM Purchases JOIN Product ON Purchases.productID=Product.productID WHERE Purchases.productID='" . $_POST["prod"] ."'";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo $row["description"] . " sales: $" . $row["sales"] * $row["cost"];
   }
   mysqli_free_result($result);
   mysqli_close($connection);
?>



</html>
</body>
