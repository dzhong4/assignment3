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
    die("Phone number length error expect format like 111-1111" );
}
/*update*/
$query = "UPDATE customer SET phonenumber = \"$Phone_Num\" WHERE cusID = $Customer";
$result=mysqli_query($connection,$query);
if (!$result) {
    die("database update query failed.");
}
echo "The phone number of ".$whichCus." has been updated";
mysqli_close($connection);
?>
