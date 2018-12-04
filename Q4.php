<?php

	include 'connecttodb.php';

  $check4 = 0;
  $query = "SELECT customerID FROM Customer";
  $result = mysqli_query($connection, $query);

  if (!$result) {
        die("databases query failed.");
   }

  //check if customerID exists
  while ($row = mysqli_fetch_assoc($result)) {
     if($row['customerID'] == $_POST['customerID']){
        $check4 = 1;
     }
   }

  if ($check4 == 1) {
    echo "<p> This customer ID is unavailable. </p>";
  }


  else {
      $query = "INSERT INTO Customer (customerID, firstName, lastName, city, phoneNumber) VALUES('" . $_POST['customerID'] . "' , '" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['city'] . "', '" . $_POST['phonenumber'] . "')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
         die("databases query failed.");
      }
   }
   mysqli_close($connection);
?>
