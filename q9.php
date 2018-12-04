<?php
   include 'connectdb.php';
?>
<h1>Product:</h1>
<p>The data shown follows a sequence of total number of purchases, the product description, and the money made from the transactions</p>
<?php
	$Product = $_POST["products"];
	$query = "SELECT SUM(Quantity) AS totalPurchase, description,  SUM(Quantity)*cost AS income FROM purchases INNER JOIN product ON product.prodID = purchases.prodID WHERE purchases.prodID = $Product GROUP BY purchases.prodID ";
	$result=mysqli_query($connection,$query);
	if (!$result) {
          die("database sum query failed.");
   	}
	while ($row = mysqli_fetch_assoc($result)) {
       	echo "Total Purchase ". $row["totalPurchase"]." for product: ".$row["description"]." total income ".$row["income"].'<br>';
        }

	mysqli_free_result($result);
    mysqli_close($connection);
?>	 
