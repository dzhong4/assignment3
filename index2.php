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
<h1>Welcome to Our Company</h1>
<h2>Customers</h2>
<form action="getproduct.php" method="post">
<?php
   include 'getdata.php';
?>
<input type="submit" value="Get Product">
</form>
<h2>Products</h2>
<?php
include 'getproduct.php';
?> 
</body>
</html>
