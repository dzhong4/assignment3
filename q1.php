<?php
$query = "SELECT * FROM customer ORDER BY lastname";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "Witch customer you want to chack?<br/>";
while ($row = mysqli_fetch_assoc($result)) {
    echo '<input type="radio" name="customers" value="';
    echo $row["cusID"];
    echo '">' .$row["cusID"]." ".$row["firstname"]." ".$row["lastname"]. "<br>";
}
mysqli_free_result($result);
echo "</ol>";
?>

