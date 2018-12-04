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
         # If the user pressed "Show"
         if (isset($_POST["reorder"])) {
           # Reorder the products with depending on the user's choice
           //$query = 'SELECT * FROM Product ORDER BY ' . $_POST["order"] . ' ' . $_POST["ascdesc"];
           $query = "SELECT * FROM product ORDER BY " . $_POST["type"] . " " . $_POST["order"] ;
           $result = mysqli_query($connection, $query);
           if (!$result) {
             die("Query failed");
           }
           # Create a loop to print the data
           while ($row = mysqli_fetch_assoc($result)) {
             echo '<li>' . 'Product ID: ' . $row["productID"] . ', Name: ' . $row["productDescription"] . ', Cost: ' . $row["costPerItem"] . ', Quantity: ' . $row["numberItems"];
           }
           mysqli_free_result($result);
         }
         # Close connection after
         mysqli_close($connection);
       ?>


</html>
</body>
