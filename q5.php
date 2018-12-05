<?php
/*Dzhong1
 * Cs3319
 * updata customer Phone number
 * */
include 'connectdb.php';
?>
<h1>Updating your phone:</h1>
<?php
$Customer = $_POST["customers"];
$Phone_Num = $_POST["phone"];
/*make sure the phone number has 8 dig*/
if(strlen($Phone_Num)>8||strlen($Phone_Num)<8){
    echo '<a href="index.php">Go back to home</a>'."<br>";
    die("Phone number length error expect format like 111-1111" );
}
/*update*/
$query = "UPDATE customer SET phonenumber = \"$Phone_Num\" WHERE cusID = $Customer";
$result=mysqli_query($connection,$query);
if (!$result) {
    echo '<a href="index.php">Go back to home</a>'."<br>";
    die("Please choose a customer");
}
echo "The phone number has been updated"."<br>";
echo '<a href="index.php">Go back to home</a>';
mysqli_close($connection);
?>
