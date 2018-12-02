<!DOCTYPE html>
<html>

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
    if (isset($_POST["submit"])) {
      $query = 'SELECT * FROM Product ORDER BY '. $_POST["order"] . ''. $_POST["type"];
      $result = mysqli_query($connection,$query);
      if (!$result) {
          die("databases query failed.");
      }
      while ($row = mysqli_fetch_assoc($result)) {
          echo '<li>' . $row["productID"] . ' ' . $row["description"] . ' ' . $row["costPerItem"] . ' ' . $row["quantity"];
                  }
                  mysqli_free_result($result);
                }
?>






</html>
