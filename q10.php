<?php
/*Connect to databases
*Dzhong4 Cs3319
 * */
include 'connectdb.php';
?>
<h1>Updating your phone:</h1>
<?php
/*
 * */
$Customer = $_POST["customers"];
$Url = $_POST["url"];
$query = "UPDATE customer SET cusimage = \"$Url\" WHERE cusID = $Customer";
if (!$result=mysqli_query($connection,$query)) {
    die("URL too long");
}
echo "The url has been add to databases.";
mysqli_close($connection);
?>
