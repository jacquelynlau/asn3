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

  else {
  $customerID = $_POST["customerID"]
  $customerFName = $_POST["firstname"]
  $customerLName = $_POST["lastname"];
  $customerCity = $_POST["city"];
  $customerPhone = $_POST["phonenumber"];

  $query = "INSERT INTO Customer VALUES ('$customerID', '$customerFName',
           '$customerLName', '$customerPhone', '$customerCity')";

  $result = mysqli_query($connection,$query);

  if (!$result) {
     die("databases query failed.");
  }
  else {
    echo "<p> Customer added </p>";
  }
}


  // if the customerID does not exist, add the new customer
  //else {
    //  $query = "INSERT INTO Customer (customerID, firstName, lastName, city, phoneNumber) VALUES('" . $_POST['customerID'] . "' , '" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['city'] . "', '" . $_POST['phonenumber'] . "')";
      //$result = mysqli_query($connection,$query);
      //if (!$result) {
        // die("databases query failed.");
      //}
      //else {
      //  echo "<p> Customer added </p>";
      //}
   //}
   mysqli_close($connection);
?>
