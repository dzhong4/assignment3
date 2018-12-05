<?php
/*Dzhong1
 * Cs3319
 * Insert a image to the customer
 * */
include 'connectdb.php';
?>
<h1>Add Image for customer</h1>
<?php
$Customer = $_POST["customers"];
if ($Customer==""){
    echo '<a href="index.php">Go back to home</a>'."<br>";
    die("Please choose a customer");
}
$query = "select cusimage FROM customer WHERE cusID = $Customer";
if (!$result=mysqli_query($connection,$query)) {
    echo $result;
}
$row =mysqli_fetch_assoc($result);
if($row["cusimage"]==""){
    echo '<form action="q10add.php" method="post">';
    echo "<input type=\"hidden\" name=\"Customers\" value=\"$Customer\">";
    echo "Image url:".'<input type="text" name="url">'."<br>";
    echo '<input type="submit" value=" Insert ">';
    echo '</form>';
    echo '<a href="index.php">Go back to home</a>';
}else{
    echo "Already has a image for this user"."<br>";
    echo '<a href="index.php">Go back to home</a>';
}

mysqli_close($connection);
?>
