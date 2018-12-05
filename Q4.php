<!DOCTYPE html>
<html>
<body>


<?php
	include 'connecttodb.php';

  // initialize the checker
  $check4 = 0;
  $query = "SELECT customerID FROM Customer";
  $result = mysqli_query($connection, $query);

  if (!$result) {
        die("databases query failed.");
   }

  // check if customerID already exists in the database
  while ($row = mysqli_fetch_assoc($result)) {
     if($row['customerID'] == $_POST['customerID']){
        $check4 = 1;
     }
   }

  // if the customerID already exists, throw an error
  if ($check4 == 1) {
    echo "<p> This customer ID is unavailable. </p>";
  }

  // if the customerID does not exist, add the new customer
  else {
    $query = "INSERT INTO Customer (customerID, firstName, lastName, city, phoneNumber)
    VALUES('" . $_POST['customerID'] . "' , '" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['city'] . "', '" . $_POST['phonenumber'] . "')";
    $result = mysqli_query($connection,$query);

		//if unsuccessful, trigger error message
    if (!$result) {
        die("databases query failed.");
    }

		//if successful, trigger success message
    else {
        echo "<h1> Customer successfully added! </h1>";
    }
   }

   mysqli_close($connection);
?>

<!-- go home link -->
<a href="assign3.php">Go Home</a>

</body>
</html>
