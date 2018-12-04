<?php
$query = "SELECT * FROM customer ORDER BY lastname";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "Witch customer you want to chack?<br/>";
/*list all customer*/
while ($row = mysqli_fetch_assoc($result)) {
    echo '<input type="radio" name="customers" value="';
    echo $row["cusID"];
    echo '">' .$row["cusID"]." ".$row["firstname"]." ".$row["lastname"]. "<br>";
    echo '<img src="' . $row["cusimage"] . '" height="60" width="60" alt="You can insert a image in Q10">'."<br>";
}
mysqli_free_result($result);
echo "</ol>";
?>

