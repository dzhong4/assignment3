<?php
/*Dzhong1
 * Cs3319
 * Show any product that never been sell.
 * */
$query = "SELECT description FROM product WHERE prodID NOT IN (SELECT prodID FROM purchases)";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "<ol id = 'product'>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row["description"]."</li>";
}
mysqli_free_result($result);
echo "</ol>";
?>
