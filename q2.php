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
    $Order= $_POST["order"];
    $query = "SELECT * FROM product ORDER BY $Order";
    $result=mysqli_query($connection,$query);
    if (!$result) {
        die("database query2 failed.");
    }
    echo "By ".$Order;
    while ($row=mysqli_fetch_assoc($result)) {

        echo '<li>';
        echo $row["prodID"]." | ".$row["description"]." | ".$row["cost"];
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


