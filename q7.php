<?php
	include 'connectdb.php';
?>
<h1>Here are the customers:</h1>
<?php
	$quantity = $_POST["quantity"];
	echo "Quantity is ".$quantity."";
	$query = "select * FROM ((customer INNER JOIN purchases ON customer.cusID=purchases.cusID)INNER JOIN product ON purchases.prodID = product.prodID) WHERE Quantity > $quantity";
	$result = mysqli_query($connection, $query);
	if (!$result) {
        	die("Error: insert failed" . mysqli_error($connection));
    	}
	echo "<ol>";
	while($row = mysqli_fetch_assoc($result)) {
   		echo "<li>";
    		echo "Customer :".$row["firstname"]." ".$row["lastname"]." bought ".$row["Quantity"]." ".$row["description"]." ";
        echo "</li>";
	}
	mysqli_free_result($result);
    mysqli_close($connection);
	echo "</ol>";

?>
