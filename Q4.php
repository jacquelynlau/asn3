<?php

	include 'connecttodb.php';

  //if there is missing information
  //if (!$customerID || !$firstname || !$lastname || !$city){
    //          echo "<p> There is missing information. </p>";
//  }

  //initialize checks for if the customerID exists
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


  if ($check4 == 1) {
    echo "<p> This customer ID is unavailable. </p>";
  }
}

  if ($check4 == 0){
    $customerID = $_POST["customerID"];
    $customerFName = $_POST["firstname"];
    $customerLName = $_POST["lastname"];
    $customerCity = $_POST["city"];
    $query = "INSERT INTO Customer VALUES ('$customerFName', '$customerLName',
        '$customerCity', '$customerID')";

    $insert_result = mysqli_query($connection, $query);
}


    if (!$insert_result) {
               die("Query to insert customer failed.");
             }
             else {
                 echo 'Customer added!';
            }
mysqli_close($connection);

?>
