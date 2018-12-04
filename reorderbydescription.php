
<?php
include 'connecttodb.php';
include 'assign3.php'; 

if (isset($_POST["submit"])) {
$query = 'SELECT * FROM Product ORDER BY ' . $_POST["type"] . ' ' . $_POST["description"];

$result = mysqli_query($connection, $query);
            if (!$result) {
              die("Query failed");
            }
            # Create a loop to print the data
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<li>' . 'Product ID: ' . $row["productID"] . ', Name: ' . $row["description"] . ', Cost: ' . $row["costPerItem"] . ', Quantity: ' . $row["quantity"];
            }
            mysqli_free_result($result);
          }
          # Close connection after
          mysqli_close($connection);
?>
