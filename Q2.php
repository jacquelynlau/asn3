<?php
    include 'connecttodb.php';
?>

<!DOCTYPE html>
<html>
<body>

<?php
// order by ascending prices
if(isset($_POST['price']) && isset($_POST['ascending'])) {
    $query = "SELECT * FROM Product ORDER BY costPerItem ASC";
    }

// order by descending prices
else if(isset($_POST['price']) && isset($_POST['descending'])) {
    $query = "SELECT * FROM Product ORDER BY costPerItem DESC";
    }

// order by ascending names
if(isset($_POST['name']) && isset($_POST['ascending'])) {
    $query = "SELECT * FROM Product ORDER BY description ASC";
    }

// order by descending names
else if(isset($_POST['name']) && isset($_POST['descending'])) {
    $query = "SELECT * FROM Product ORDER BY description DESC";
    }

$result = mysqli_query($connection, $query);

if (!$result) {
    die("database query failed");
    }

//while loop to print results
while ($row = mysqli_fetch_assoc($result)) {
    echo '<li>' . 'Product ID: ' . $row["productID"] . ', Name: ' . $row["description"] . ', Cost: ' . $row["costPerItem"] . ', Quantity: ' . $row["quantity"];
    }

mysqli_free_result($result);
mysqli_close($connection);
?>

<br>
<br>

<!-- go home link -->
<a href="assign3.php">Go Home</a>
</html>
</body>
