<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Company</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Here are your purchases:</h1>
<ol>
<?php
   $Customer= $_POST["customers"];
   $quantity = $_POST["quantity"];
   $whichProd =$_POST["products"];
   if($quantity < 1){
       die("Error: invalid quantity, expect any quantity > 0". mysqli_error($connection));
   }
   $query = 'INSERT INTO purchases VALUES("' . $Customer . '","' . $whichProd . '","' . $quantity . '") ON DUPLICATE KEY UPDATE quantity = quantity + "'.$quantity. '"';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your purchase was added!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
