<?php

      include 'connecttodb.php';

        if (isset($_POST["submit7"])) {
          # Put it in variables
          $quantity = $_POST["quantity"];
          $amount = intval($quantity);

          # Query to get the customer and product description
          $query = 'SELECT firstName, lastName, description, quantity FROM Purchases INNER JOIN Product ON Product.productID=Purchases.productID INNER JOIN Customer ON
          Customer.customerID=Purchases.customerID WHERE quantity>=' . $amount;
          $result = mysqli_query($connection, $query);
          # Check if it worked
          if (!$result) {
              die("databases query failed.");
          }
          while ($row = mysqli_fetch_assoc($result)) {
            echo '<li><b>' . $row["firstName"] . ' ' . $row["lastName"] . '</b> Purchased <b>' . $row["description"] . '</b>. Amount: <b>' . $row["quantity"] . '</b></li>';
          }
          mysqli_free_result($result);
        }
        # Close database
        mysqli_close($connection);
      ?>
