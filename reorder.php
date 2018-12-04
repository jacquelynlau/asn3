<?php
    include 'connecttodb.php';
?>


<!DOCTYPE html>
<html>
<body>

<form action="#" method="post">
<!-- organize by ascending or descending order button -->
<select name = "order">
    <option value = "ASC"> Ascending </option>
    <option value = "DESC"> Descending </option>
</select>

<!-- organize by price or name button -->
<select name = "type">
    <option value = "PRICE"> Price </option>
    <option value = "NAME"> Name </option>
</select>


<input name= "reorder" type="submit" value="Show">

</form>
<?php

         if (isset($_POST["reorder"])) {
           # Reorder the products with depending on the user's choice
           $query = 'SELECT * from Product;'
           $result = mysqli_query($connection, $query);
           if (!$result) {
             die("Query failed");
           }
           # Create a loop to print the data
           while ($row = mysqli_fetch_assoc($result)) {
             echo '<li>' . 'Product ID: ' . $row["productID"] . ', Name: ' . $row["description"] . ', Cost: ' . $row["costPerItem"] . ', Quantity: ' . $row["quantity"];
           }
           mysqli_free_result($result);
         }
         # Close connection after
         mysqli_close($connection);
       ?>


</html>
</body>
