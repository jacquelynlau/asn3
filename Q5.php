<!DOCTYPE html>
<html>
<body>


<?php

   include 'connecttodb.php';

   //update phone number to the one submitted
   $query = "UPDATE Customer SET phoneNumber ='" . $_POST['phonenumber5'] . "' WHERE customerID='" . $_POST['customer5'] . "'";
   $result = mysqli_query($connection,$query);

   //if unsuccessful, trigger error message
   if (!$result) {
        die("databases query failed");
   }

   //if successful, trigger success message s
    else {
        echo "<h1> Phone number successfully updated! </h1>";
    }

   mysqli_close($connection);
?>

<!-- go home link -->
<a href="assign3.php">Go Home</a>

</body>
</html>
