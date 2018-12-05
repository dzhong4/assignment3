<?php
/*Dzhong1
 * Cs3319
 * Delete a customer
 * */
include 'connectdb.php';
?>
<h1>Delete a customer:</h1>
<?php
$Customer = $_POST["Customers"];
/*first delete from purchase table*/
echo $Customer;
$query ="DELETE FROM purchases WHERE cusID = \"$Customer\"";
$result = mysqli_query($connection,$query);
if(!$result){
    die("Error: delete failed" . mysqli_error($connection));
}
/*Than delete from customer*/
$query ="DELETE FROM customer WHERE cusID = \"$Customer\"";
$result = mysqli_query($connection,$query);
if(!$result){
    die("Error: delete failed" . mysqli_error($connection));
}
echo "Customer ".$Customer." was deleted successfully!"."<br>";
echo '<a href="index.php">Go back to home</a>';
mysqli_close($connection);
?>
