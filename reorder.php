<?php
    include 'connecttodb.php';
?>


<!DOCTYPE html>
<html>
<body>

<!-- organize by ascending or descending order button -->
<select name= "order">
  <input type = "radio" name = "ascending" value = "ASC"> Ascending </option>
  <input type = "radio" name = "descending" value = "DESC"> Descending </option>
</select>

<!-- organize by price or name button -->
<select name = "type">
  <input type = "radio" name = "price" value = "PRICE"> Price </option>
  <input type = "radio" name = "name" value = "DESC"> Name </option>
</select>

<input name = "reorder" type = "submit" value = "Reorder Table">

</html>
</body>
