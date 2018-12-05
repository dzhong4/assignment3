<!--Customer purchase-->
<!--Dzhong4-->
<!--Cs3319-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Company</title>
</head>
<body>
<!--Connect to databases-->
<?php
include 'connectdb.php';
?>
<h1>Here are your purchases:</h1>
<ol>
    <?php
    $Customer= $_POST["customers"];
    $quantity = $_POST["quantity"];
    $Prod =$_POST["products"];
    if ($Customer==""){
        echo '<a href="index.php">Go back to home</a>'."<br>";
        die("Please choose a cusomer");
    }
    if ($Prod==""){
        echo '<a href="index.php">Go back to home</a>'."<br>";
        die("Please choose a Product");
    }
    if($quantity < 1){/*not alould quantity goes down*/
        echo '<a href="index.php">Go back to home</a>'."<br>";
        die("Error: invalid quantity, expect any quantity > 0". mysqli_error($connection));
    }
    $query = 'INSERT INTO purchases VALUES("' . $Customer . '","' . $Prod . '","' . $quantity . '") ON DUPLICATE KEY UPDATE quantity = quantity + "'.$quantity. '"';
    if (!mysqli_query($connection, $query)) {
        echo '<a href="index.php">Go back to home</a>'."<br>";
        die("Error: insert failed" . mysqli_error($connection));
    }
    echo "Your purchase was added!"."<br>";
    echo '<a href="index.php">Go back to home</a>';
    mysqli_close($connection);
    ?>
</ol>
</body>
</html>