<?php
    include 'connecttodb.php';
?>


<!DOCTYPE html>
<html>
<body>

<!-- organize by ascending or descending order button -->
<select name = "order">
    <option name = "ascending" value = "ASC"> Ascending </option>
    <option name = "descending" value = "DESC"> Descending </option>
</select>

<!-- organize by price or name button -->
<select name = "type">
    <option name = "price" value = "PRICE"> Price </option>
    <option name = "name" value = "NAME"> Name </option>
</select>


</html>
</body>
