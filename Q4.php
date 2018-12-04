<?php

	include 'connecttodb.php';


  $check4 = 0;
  $query = "SELECT * FROM Customer";
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

else {
    $customerID = $_POST["customerID"];
    $customerFName = $_POST["firstname"];
    $customerLName = $_POST["lastname"];
    $customerCity = $_POST["city"];
    $query = "INSERT INTO Customer VALUES ('$customerID', '$customerFName', '$customerLName', '$customerCity')";

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
