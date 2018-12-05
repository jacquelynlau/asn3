<?php

    include 'connecttodb.php';

    $quantity = $_POST["quantity"];

        //  $amount = intval($quantity);

          # Query to get the customer and product description
          $query = 'SELECT firstName, lastName, description, quantity FROM Purchases INNER JOIN Product ON Product.productID=Purchases.productID INNER JOIN Customer ON
          Customer.customerID=Purchases.customerID WHERE quantity>=' . $amount;

          $result = mysqli_query($connection, $query);
          
          if (!$result) {
              die("databases query failed.");
          }


          echo "<ul>";
          while ($row = mysqli_fetch_assoc($result)) {
            echo '<li><b>' . $row["firstName"] . ' ' . $row["lastName"] . '</b> Purchased <b>' . $row["description"] . '</b>. Amount: <b>' . $row["quantity"] . '</b></li>';
          }
          echo "</ul>";
          mysqli_free_result($result);



        mysqli_close($connection);
      ?>
