<?php
  include 'connecttodb.php';

  if (isset($_POST["submit"])) {
    $customerID = $_POST["customer3"];
    $productID = $_POST["product3"];
    $quantity = $_POST["quantity"];

    // if there is missing information
    if (!$productID || !$quantity || !$customerID){
                echo "<p> There is missing information. </p>";
    }

    $query = 'SELECT COUNT(*) as count, quantityPurchased FROM CustomerPurchases WHERE customerID=' . $customerID . ' AND productID=' . $productID;
         $result = mysqli_query($connection, $query);
         # Check if query works
         if (!$result) {
           die("Query failed");
         }
         $row = mysqli_fetch_assoc($result);
         # If the customer has not purchased this product yet, then add it onto the purchase table
         if ($row["count"] != 1) {
           $insert = "INSERT INTO CustomerPurchases VALUES ('$customerID', '$productID', '$quantity')";
           $insert_result = mysqli_query($connection, $insert);
           if (!$insert_result) {
             die("Insert Query has failed");
           }
         }
         # If the customer has purchased this product already
         else {
           $newTotal = $row["quantity"] + $quantity;
           $add_query = 'UPDATE CustomerPurchases SET quantityPurchased=' . $newTotal . ' WHERE customerid=' . $customerID . ' AND productID=' . $productID;
           $add_result = mysqli_query($connection, $add_query);
           if(!$add_result) {
             die("Add query has failed");
           }
         }
         mysqli_free_result($$result);
         mysqli_free_result($insert_result);
         mysqli_free_result($add_result);
       }
       # Close connection after
       mysqli_close($connection);
     ?>


}
