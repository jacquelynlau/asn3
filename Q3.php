<!DOCTYPE html>
<html>
<body>

<?php

  //not done :(


  include 'connecttodb.php';

  if (isset($_POST["submit"])) {
    $customerID = $_POST["customer3"];
    $productID = $_POST["product3"];
    $quantity = $_POST["quantity"];

    // if there is missing information
    if (!$productID || !$quantity || !$customerID){
                echo "<p> There is missing information. </p>";
    }

     ?>
     
<br>
<!-- go home link -->
<a href="assign3.php">Go Home</a>

</body>
</html>
