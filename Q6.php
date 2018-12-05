<!DOCTYPE html>
<html>
<body>
  
  <?php

     include 'connecttodb.php';

     //delete the selected customer
     $query = "DELETE FROM Customer WHERE customerID='" . $_POST['customerdelete'] . "'";
     $result = mysqli_query($connection,$query);

     //if unsuccessful, trigger error message
     if (!$result) {
          die("databases query failed");
      }

     //if successful, trigger success message
     else {
           echo "<h1> Customer successfully deleted! </h1>";
       }
     mysqli_close($connection);

  ?>

  <!-- go home link -->
  <a href="assign3.php">Go Home</a>

</html>
</body>
