<?php

  include 'connecttodb.php';

  $query = "SELECT * FROM Product ORDER BY description ASC";
  if (isset($_POST["reorder"])){
   $query = 'SELECT * from products ORDER BY ' . $_POST["type"] . ' ' . $_POST["order"];
   }

   $result = mysqli_query($connection,$query);

   if (!$result) {
        die("databases query failed.");
    }

    while ($row = mysqli_fetch_assoc($result)) {
              echo '<li>' . 'Product ID: ' . $row["productID"] . ', Name: ' . $row["description"] . ', Cost: ' . $row["costPerItem"] . ', Quantity: ' . $row["quantity"];
            }

mysqli_free_result($result);
mysqli_close($connection);

?>
