<?php
/*Dzhong1
 * Cs3319
 * List all customer and information
 * */
$query = "SELECT * FROM customer ORDER BY lastname";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "Witch customer you want to check?<br/>";
/*list all customer*/
while ($row = mysqli_fetch_assoc($result)) {
    echo '<input type="radio" name="customers" value="';
    echo $row["cusID"];
    echo '">' ."CustomerID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["cusID"]."<br>";
    echo "&nbsp;&nbsp;|&nbsp;Customer Name: ".$row["firstname"]." ".$row["lastname"]."<br>";
    echo "&nbsp;&nbsp;|&nbsp;Customer City:&nbsp;&nbsp;&nbsp;".$row["city"]."<br>";
    echo "&nbsp;&nbsp;|&nbsp;Phone  Number: ".$row["phonenumber"]."<br>";
    echo "&nbsp;&nbsp;|&nbsp;Service Agent:&nbsp;&nbsp;&nbsp;".$row["agentID"]."<br>";
    echo '<img src="' . $row["cusimage"] . '" height="60" width="60" alt="You can insert a image in Q10">'."<br>";
}
mysqli_free_result($result);
echo "</ol>";
?>
