<!--List all product by order-->
<!--Dzhong4-->
<!--Cs3319-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Products</title>
</head>

<body>
<?php
include 'connectdb.php';
?>
<ol>
    <h1>Product table</h1>
    <?php
    /*show order*/
    $Order= $_POST["order"];
    $query = "SELECT * FROM product ORDER BY $Order";
    $result=mysqli_query($connection,$query);
    if (!$result) {
        die("No select!");
    }
    echo "By ".$Order;
    while ($row=mysqli_fetch_assoc($result)) {

        echo '<li>';
        echo $row["prodID"]."  ".$row["description"]."  ".$row["cost"]."<br>";
        echo '</li>';
    }
    echo "<br>".'<a href="index.php">Go back to home</a>';
    mysqli_free_result($result);
    ?>
</ol>
<?php
mysqli_close($connection);
?>
</body>
</html>
