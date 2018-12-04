
<?php
include 'connecttodb.php';

$DescriptionOrder = $_POST["description"];
echo $DescriptionOrder;

if ($DescriptionOrder == "ASC") {
      $query = 'SELECT * FROM Product ORDER BY description ASC';
 } else {
      $query = 'SELECT * FROM Product ORDER BY description DESC';
 }

 $result=mysqli_query($connection,$query);

 while ($row=mysqli_fetch_assoc($result)) {
     echo $row["productID"]. " " .$row["description"]. " " .$row["costPerItem"]. " " .$row["quantity"]. "<br>";
  }

if (!$result) {
       die("database query2 failed.");
     }

   mysqli_free_result($result);
?>
