<?php
   include 'connecttodb.php';

   $quantity= $_POST["quantity7"];
   $amount = intval($quantity);

   $query = 'SELECT firstName, lastName, description, quantityPurchased FROM CustomerPurchases INNER JOIN Product ON Product.productID = Purchases.productID INNER JOIN Customer ON
           Customers.customerID=Purchases.customerID WHERE quantity>=' . $amount;

   $result = mysqli_query($connection, $query);

   if (!$result) {
             die("databases query failed.");
   }
   while ($row = mysqli_fetch_assoc($result)) {
           echo '<li><b>' . $row["firstName"] . ' ' . $row["lastName"] . '</b> Purchased <b>' . $row["description"] . '</b>. Amount: <b>' . $row["quantity"] . '</b></li>';
         }
  mysqli_free_result($result);


mysqli_close($connection);

?>
