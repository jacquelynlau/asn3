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
      $query = "SELECT * FROM Product ORDER BY description ASC";
      if(isset($_POST["type"]) && isset($_POST["order"])){
      $query = "SELECT * FROM product ORDER BY " . $_POST["type"] . " " . $_POST["order"] ;
      }
      $result = mysqli_query($connection,$query);

      if (!$result) {
          die("databases query failed.");
      }

      echo "<table>";
      echo "<th>Product Name</th>";
         echo	"<th>Price</th>";			//create a table
         echo	"<th>Quantity Left</th>";
         while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $row['description'] . " </td>";
      	echo "<td>" . $row['costPerItem'] . " </td>"; //place the info into the table
      	echo "<td>" . $row['quantity'] . " </td>";
      	echo "</tr>";
         }
         echo "</table>";
         mysqli_free_result($result);
      ?>
