<?php
/*Dzhong1
 * Cs3319
 * Show total number of purchases by the product
 * */
include 'connectdb.php';
?>
<h1>Product:</h1>
<p>The data shown follows a sequence of total number of purchases, the product description, and the money made from the transactions</p>
<?php
$Product = $_POST["products"];
$query = "SELECT SUM(Quantity) AS totalPurchase, description,  SUM(Quantity)*cost AS income FROM purchases INNER JOIN product ON product.prodID = purchases.prodID WHERE purchases.prodID = $Product GROUP BY purchases.prodID ";
$result=mysqli_query($connection,$query);
if (!$result) {
    die("No select!");
}
$row = mysqli_fetch_assoc($result);

if($row["income"]==""){
    echo '<a href="index.php">Go back to home</a>'."<br>";
    die("No purchase for this product");
}else{
    echo "Total Purchase ". $row["totalPurchase"]." for product: ".$row["description"]." total income ".$row["income"].'$<br>';
    echo '<a href="index.php">Go back to home</a>';
}

mysqli_free_result($result);
mysqli_close($connection);
?>
