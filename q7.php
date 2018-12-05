<?php
/*Dzhong1
 * Cs3319
 * check any customer bought product higher than given quantity
 * */
include 'connectdb.php';
?>
<h1>Here are the customers:</h1>
<?php
$quantity = $_POST["quantity"];
if ($quantity==""){
    echo '<a href="index.php">Go back to home</a>'."<br>";
    die("Please enter a Quantity");
}
echo "Quantity is ".$quantity."";
$query = "select * FROM ((customer INNER JOIN purchases ON customer.cusID=purchases.cusID)INNER JOIN product ON purchases.prodID = product.prodID) WHERE Quantity > $quantity";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("Error: insert failed" . mysqli_error($connection));
}
echo "<ol>";
/*list all customer match*/
while($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo "Customer :".$row["firstname"]." ".$row["lastname"]." bought ".$row["Quantity"]." ".$row["description"]." ";
    echo "</li>";
}
echo '<a href="index.php">Go back to home</a>'."<br>";
mysqli_free_result($result);
echo "</ol>";
?>
