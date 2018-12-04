<?php
include 'connectdb.php';
?>
<h1>Delete a customer:</h1>
<?php
$whichCus = $_POST["customers"];

$query ="DELETE FROM purchases WHERE cusID = \"$whichCus\"";
$result = mysqli_query($connection,$query);
if(!$result){
    die("Error: delete failed" . mysqli_error($connection));
}
$query ="DELETE FROM customer WHERE cusID = \"$whichCus\"";
$result = mysqli_query($connection,$query);
if(!$result){
    die("Error: delete failed" . mysqli_error($connection));
}
echo "Customer ".$whichCus." was deleted successfully!";
mysqli_close($connection);
?>
