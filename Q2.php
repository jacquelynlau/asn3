<?php

   include 'connecttodb.php';
   $price = $_POST["price"];
   $descending = $_POST["descending"];

   if (isset($price)) && (isset($descending)) {
     $query = 'SELECT * from Product ORDER BY ' . $_POST["price"] . ' ' . $_POST["descending"];
   }

   $result = mysqli_query($connection, $query);
               if (!$result) {
                 die("Query failed");
               }
               # Create a loop to print the data
               while ($row = mysqli_fetch_assoc($result)) {
                 echo '<li>' . 'Product ID: ' . $row["productID"] . ', Name: ' . $row["description"] . ', Cost: ' . $row["costPerItem"] . ', Quantity: ' . $row["quantity"];
               }
               mysqli_free_result($result);
             }
             # Close connection after
             mysqli_close($connection);
?>
