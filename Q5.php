<?php
   include 'connectdb.php';
   $query = "UPDATE Customer SET phoneNumber ='" . $_POST['phonenumber5'] . "' WHERE customerID='" . $_POST['customer5'] . "'";
   $result = mysqli_query($connection,$query);//update the phone number of existing customer
   if (!$result) {
        die("databases query failed.");
    }
    else {
        echo "<h1> Customer successfully added! </h1>";
    }
   mysqli_close($connection);
?>
