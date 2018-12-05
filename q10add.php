<?php
/*Dzhong1
 * Cs3319
 * updata customer Phone number
 * */
include 'connectdb.php';
?>
<?php
$Customer = $_POST["Customers"];
$url = $_POST["url"];
/*update*/
$query = "UPDATE customer SET cusimage = \"$url\" WHERE cusID = $Customer";
$result=mysqli_query($connection,$query);
if (!$result) {
    die("The url too long");
    echo '<a href="index.php">Go back to home</a>';
}
echo "The insert for customer:  ".$Customer." success."."<br>";
echo '<a href="index.php">Go back to home</a>';
mysqli_close($connection);
?>
