<?php
    include 'connecttodb.php';
?>


<!DOCTYPE html>
<html>
<body>


<?php

           if(isset($_POST['price']) && isset($_POST['ascending'])) {
        //   if ($priceOrder == "ASC") {

           // order price ascending
           $query = "SELECT * FROM Product ORDER BY costPerItem ASC";
         }

           $result = mysqli_query($connection, $query);
           if (!$result) {
             die("Query failed");
           }
           # Create a loop to print the data
           while ($row = mysqli_fetch_assoc($result)) {
             echo '<ul>' . 'Product ID: ' . $row["productID"] . ', Name: ' . $row["description"] . ', Cost: ' . $row["costPerItem"] . ', Quantity: ' . $row["quantity"];
           }
           mysqli_free_result($result);

         # Close connection after
         mysqli_close($connection);
       ?>


</html>
</body>
