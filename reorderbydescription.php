<?php
include 'connectdb.php';

$DescriptionOrder = $_POST["description"];
echo $DescriptionOrder;

if ($DescriptionOrder == "ASC") {
      $query = 'SELECT * FROM Product ORDER BY description ASC';
 } else {
      $query = 'SELECT * FROM Product ORDER BY description DESC';
 }
 //$query = 'SELECT * FROM owner, pet WHERE pet.ownerid=owner.ownerid AND pet.ownerid="' . $whichOwner . '"';

 $result=mysqli_query($connection,$query);
  if (!$result) {
       die("database query2 failed.");
   }
  while ($row=mysqli_fetch_assoc($result)) {
      echo $row["productID"]. " " .$row["description"]. " " .$row["costPerItem"]. " " .$row["quantity"]. "<br>";
   }
   mysqli_free_result($result);
?>
