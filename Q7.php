<?php

    include 'connecttodb.php';

    $quantity = $_POST["quantity"];

    //get the integer value of a variab
    $amount = intval($quantity);

    //get customer and product description that is over the specific quantity entered
    $query = 'SELECT firstName, lastName, description, quantity FROM Purchases INNER JOIN Product ON Product.productID=Purchases.productID INNER JOIN Customer ON
    Customer.customerID=Purchases.customerID WHERE quantity>=' . $amount;

    $result = mysqli_query($connection, $query);

    //if unsuccessful, trigger error message
    if (!$result) {
              die("databases query failed.");
    }

    //prints out the list
    echo "<ul>";
          while ($row = mysqli_fetch_assoc($result)) {
            echo '<li>' . $row["firstName"] . ' ' . $row["lastName"] . ' -- ' . $row["description"] . '. Amount: ' . $row["quantity"] . '</li>';
          }
    echo "</ul>";

   mysqli_free_result($result);
   mysqli_close($connection);
?>
