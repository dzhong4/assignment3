<?php
   include 'connectdb.php';
?>
<h1>Here are the statistics of the product:</h1>
<p>The data shown follows a sequence of total number of purchases, the product description, and the money made from the transactions</p>
<?php
	$prod = $_POST["products"];
	$query = 'SELECT SUM(Quantity) AS totalPurchase, description,  SUM(Quantity)*cost AS moneyMade FROM purchases INNER JOIN product ON product.prodID = purchases.prodID WHERE purchases.prodID = '.$prod.' GROUP BY purchases.prodID ';
	$result=mysqli_query($connection,$query);



	if (!$result) {
          die("database sum query failed.");
   	}
	while ($row = mysqli_fetch_assoc($result)) {
       	echo $row["totalPurchase"]." | ".$row["description"]." | ".$row["moneyMade"].'<br>';
        }

	mysqli_free_result($result);
?>	 
