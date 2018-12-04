<?php
	include 'connecttodb.php';

  //initialize checks for if the customerID exists
  $check4 = 0;
  $query = "SELECT customerID FROM Customer";

  //check if customerID exits
  while ($row = mysqli_fetch_assoc($result)) {
     //i
     if($row['customerID'] == $_POST['customerID']){
        $check4 = customerexists;
     }
  }

  if ($check4 = customerexists) {
    echo "<p> This customer ID is unavailable. </p>";
  }

  else{
      $query = "INSERT INTO Customer(customerID, firstName, lastName, city) VALUES('" . $_POST['customerID'] . "' , '" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['city'];
      $result = mysqli_query($connection,$query);
      if (!$result) {
         die("databases query failed.");
      }
   }
   mysqli_close($connection);




?>
