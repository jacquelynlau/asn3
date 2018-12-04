<?php
  include 'connecttodb.php';

  if (isset($_POST["submit"])) {
    $customerID = $_POST["customer3"];
    $productID = $_POST["product3"];
    $quantity = $_POST["quantity"];

    if (!$productID || !$quantity || !$customerID){
                echo "<h1> missing information </h1>";
    }
}
