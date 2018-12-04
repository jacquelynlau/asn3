<?php
    include 'connecttodb.php';
    include 'Q2.php';
?>


<!DOCTYPE html>
<html>
<body>

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

<input name = "reorder" type = "submit" value = "Reorder Table"

</html>
</body>
