<?php
    include 'connecttodb.php';
?>

<!DOCTYPE html>
<html>
<body>

<?php

// order by ascending prices
if(isset($_POST['price']) && isset($_POST['ascending'])) {
    $query = "SELECT * FROM Product ORDER BY costPerItem ASC";
    }

// order by descending prices
else if(isset($_POST['price']) && isset($_POST['descending'])) {
    $query = "SELECT * FROM Product ORDER BY costPerItem DESC";
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

         # Close connection after
         mysqli_close($connection);
       ?>


</html>
</body>
