<!DOCTYPE html>
<html>

<?php
  include 'connecttodb.php';
?>

// organize by ascending or descending order
<select name = "order">
  <option selected = "select" values = "ascending"> Ascending </option>
  <option value = "descending"> Descending </option>
</select>

// organize by price or name
<select name = "type">
  <option selected = "select" value = "price"> Price </option>
  <option value = "name"> Name </option>
</select>

//reorder the products
<input type = "submit" value = "Reorder Table"/> 



</html>
