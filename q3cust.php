<?php
$query = "SELECT * FROM customer ORDER BY lastname";
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="customers" value="';
        echo $row["cusID"];
        echo '">' ."Customer : ".$row["firstname"]." ".$row["lastname"]." -- phone number ".$row["phonenumber"]."<br>";
}
mysqli_free_result($result);
mysqli_close($connection);
echo "</ol>";
?>

