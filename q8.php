<?php
$query = "SELECT description FROM product WHERE prodID NOT IN (SELECT prodID FROM purchases)";
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}
echo "<ol id = 'product'>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row["description"];
    echo "</li>";
}
mysqli_free_result($result);
mysqli_close($connection);
echo "</ol>";
?>
