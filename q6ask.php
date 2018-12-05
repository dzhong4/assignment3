<?php
/*Dzhong1
 * Cs3319
 * Q6 Conform page
 * */
include 'connectdb.php';
?>
<h1>Add Image for customer</h1>
<?php
$Customer = $_POST["customers"];

if($Customer!=""){
    echo '<form action="q6.php" method="post">';
    echo "<input type=\"hidden\" name=\"Customers\" value=\"$Customer\">";
    echo '<input type="submit" value=" I\'m sure ">';
    echo '</form>';
    echo '<a href="index.php">Go back to home</a>';
}else{
    echo '<a href="index.php">Go back to home</a>'."<br>";
    die("No select customer");
}

mysqli_close($connection);
?>
