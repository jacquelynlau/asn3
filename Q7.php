<!DOCTYPE html>
<html>
<body>

<h1> Customers that have bought more than the specified quantity: </h1>

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
            echo '<li>' . $row["firstName"] . '<br> ' . $row["lastName"] . ' -- ' . $row["description"] . ' -- amount purchased: ' . $row["quantity"] . '</li>';
          }
    echo "</ul>";

   mysqli_free_result($result);
   mysqli_close($connection);
?>

<!-- go home link -->
<br>
<br>
<a href="assign3.php">Go Home</a>

</body>
</html>
