<!DOCTYPE html>


<?php
  include 'connecttodb.php';
?>

<form method="post" action="assign3.php">
<!-- organize by ascending or descending order button -->
<select name = "order">
  <option selected = "selected" value = "ASC"> Ascending </option>
  <option value = "DESC"> Descending </option>
</select>

<!-- organize by price or name button -->
<select name = "type">
  <option selected = "selected" value = "price"> Price </option>
  <option value = "name"> Name </option>
</select>

<!-- reorder the products button -->
<input name = "submit" type = "submit" value = "Reorder Table"/>


<?php
  include 'getproducts2.php';
?>
</form>
