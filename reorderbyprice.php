
<?php
include 'connecttodb.php';

$PriceOrder= $_POST["price"];
   echo $PriceOrder;

   if ($PriceOrder == "DESC"){
     // if descending order is selected
     $query = 'SELECT * FROM Product ORDER BY Cost DESC';
     }
     // if ascending order is selected
     else{
     $query = 'SELECT * FROM Product ORDER BY Cost ASC';
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
