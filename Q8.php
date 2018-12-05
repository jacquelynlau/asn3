<!DOCTYPE html>
<html>
<body>

<?php
  include 'connecttodb.php';

  //get the products that have not been purchased
  $query = 'SELECT * FROM Product WHERE productID NOT IN (SELECT productID FROM Purchases)';
  $result = mysqli_query($connection, $query);

  //if unsuccessful, trigger error message
  if (!$result) {
          die("Query failed");
  }

  //show list of products that have not been purchased
  while ($row = mysqli_fetch_assoc($result)) {
          echo '<li>' . $row["description"] . ' -- Product ID: ' . $row["productID"];
  }

  mysqli_close($connection);

?>

<!-- go home link -->
<br>
<a href="assign3.php">Go Home</a>

</body>
</html>
