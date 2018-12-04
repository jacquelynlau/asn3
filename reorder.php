<?php
    include 'connecttodb.php';
?>


<!DOCTYPE html>
<html>
<body>

<!-- organize by ascending or descending order button -->
<select name = "order">
    <input type = "radio" name = "ascending" value = "ASC"> Ascending </option>
    <input type = "radio" name = "descending" value = "DESC"> Descending </option>
</select>



  <select name="ordering">
  	<option selected="selected" value="ASC">Ascending</option>//option ascending and descending table
  	<option value="DESC">Descending</option>
  </select>
  <select name="type">
          <option selected="selected" value="cost">Price</option>// option price or name
          <option value="description">Name</option>
  </select>

<!-- organize by price or name button -->
  <input type = "radio" name = "price" value = "PRICE"> Price </option>
  <input type = "radio" name = "name" value = "DESC"> Name </option>



</html>
</body>
