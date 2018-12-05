<!--Show product search list-->
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
    <h1>Purchased table</h1>
    <?php
    /*search by customer*/
    $Customer= $_POST["customers"];
    $query = 'SELECT * FROM purchases, product WHERE purchases.prodID=product.prodID AND purchases.cusID="' . $Customer . '"';
    $result=mysqli_query($connection,$query);
    if (!$result) {
        die("No select!");
        echo '<a href="index.php">Go back to home</a>';
    }
    /*list by order*/
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo "Customer #".$Customer." Purchased ".$row["description"]."<br>";
        echo '<a href="index.php">Go back to home</a>';
        echo '</li>';
    }
    mysqli_free_result($result);
    ?>
</ol>
<?php
/*exit databases*/
mysqli_close($connection);
?>
</body>
</html>
