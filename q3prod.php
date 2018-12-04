<?php
/*Dzhong1
* Cs3319
*Show all product with ID and description
* */
$query = "SELECT * FROM product";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    echo '<input type="radio" name="products" value="';
    echo $row["prodID"];
    echo '">' .$row["prodID"]." | ".$row["description"]."<br>";
}
mysqli_free_result($result);
echo "</ol>";
?>
