<!DOCTYPE html>


<?php
  include 'connecttodb.php';
?>

<form action = "#" method = "post">
<!-- organize by ascending or descending order button -->
<select name = "order">
  <option value = "ascending"> Ascending </option>
  <option value = "descending"> Descending </option>
</select>

<!-- organize by price or name button -->
<select name = "type">
  <option value = "price"> Price </option>
  <option value = "name"> Name </option>
</select>

<!-- reorder the products button -->
<input name = "submit" type = "submit" value = "Reorder Table"/>
</form>

<?php
  include 'getproducts2.php';
 ?>
