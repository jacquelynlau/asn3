<?php

  include 'connecttodb.php';

  if(isset($_POST["type"]) && isset($_POST["order"])){
   $query = 'SELECT * from products ORDER BY ' . $_POST["type"] . ' ' . $_POST["order"];
   }

   $result = mysqli_query($connection,$query);d

   if (!$result) {
        die("databases query failed.");
    }

    while ($row = mysqli_fetch_assoc($result)) {
              echo '<li>' . 'Product ID: ' . $row["productID"] . ', Name: ' . $row["description"] . ', Cost: ' . $row["costPerItem"] . ', Quantity: ' . $row["quantity"];
            }

mysqli_free_result($result);
mysqli_close($connection);

?>
