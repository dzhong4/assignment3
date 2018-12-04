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
    $Customer= $_POST["customers"];
    $query = 'SELECT * FROM purchases, product WHERE purchases.prodID=product.prodID AND purchases.cusID="' . $Customer . '"';
    $result=mysqli_query($connection,$query);
    if (!$result) {
        die("database query2 failed.");
    }

    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo "Customer #".$Customer." Purchased ".$row["description"];
        echo '</li>';
    }
    mysqli_free_result($result);
    ?>
</ol>
<?php
mysqli_close($connection);
?>
</body>
</html>
