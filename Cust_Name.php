<?php
/*Dzhong1
 * Cs3319
 * List all customer name
 * */
$query = "SELECT * FROM customer ORDER BY lastname";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "customer:<br/>";
/*list all customer*/
while ($row = mysqli_fetch_assoc($result)) {
    echo '<input type="radio" name="customers" value="';
    echo $row["cusID"];
    echo '">' .$row["cusID"]." ".$row["firstname"]." ".$row["lastname"]. "<br>";
}
mysqli_free_result($result);
echo "</ol>";
?>
