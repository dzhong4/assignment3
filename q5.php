<?php
include 'connectdb.php';
?>
<h1>Updating your phone:</h1>
<?php
$Customer = $_POST["customers"];
$Phone_Num = $_POST["phone"];
if(strlen($Phone_Num)>8||strlen($Phone_Num)<8){
    die("Phone number length error expect format like 111-1111" );
}
$query = "UPDATE customer SET phonenumber = \"$Phone_Num\" WHERE cusID = $Customer";
$result=mysqli_query($connection,$query);
if (!$result) {
    die("database update query failed.");
}
echo "The phone number of ".$whichCus." has been updated";
mysqli_close($connection);
?>
