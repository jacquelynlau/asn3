<!DOCTYPE html> 
<html>
<body> 

<?php 
	include 'connecttodb.php';
?> 

<h1> Here are their purchases: </h1>


<ol>
<?php
	$whichCustomer = $_POST["customer"];
	$query = 'SELECT * FROM Customer, Product WHERE Product.customerID = Customer.customerID AND Product.customerID="'.$whichOwner.'"';
	




	$result = mysqli_query($connection,$query);
	    if (!$result) {
        	 die("database query2 failed.");
     	    }

	while ($row=mysqli_fetch_assoc($result)) {
		echo '<li>';
		echo $row["description"];	
	}
	mysqli_free_result($result);
?>	
</ol>
<?php 
	mysqli_close($connection); 
?>
</body> 
</html> 
