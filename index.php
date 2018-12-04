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
<p>
<hr>
<p>

<h2>Q1</h2>
<form action="q1prod.php" method="post">
<?php
   include 'q1.php';
?>
<input type="submit" value="Get Product purchased">
</form>
<p>
<hr>
<p>

<h2>Q2</h2>
<p>Which order would you like to present the product information?</p>
<form action="q2.php" method="post">
<input type = "radio" name = "order" value="description asc">Ascending by Description<br>
<input type = "radio" name = "order" value="description desc">Descending by Description<br>
<input type = "radio" name = "order" value="cost asc">Ascending by Cost<br>
<input type = "radio" name ="order" value="cost desc">Descending by Cost<br>
<input type="submit" value="Get product list">
</form>
<p>
<hr>
<p>

<h2>Q3</h2>
<form action="q3.php" method="post">
Quantity:<input type="number" name="quantity"><br>
New Purchase's Product: <br>
<?php
include 'q3prod.php'
?>
For which customer: <br>
<?php
include 'q3cust.php';
?>
<input type="submit" value="Add New Purchase">
</form>
<p>
<hr>
<p>

<h2>Q4</h2>
<form action="q4.php" method="post">
New Customer First Name:<input type="text" name="fname"><br>
New Customer Last Name:<input type="text" name="lname"><br>
New Customer Phone Number:<input type="text" name="phone"><br>
New Customer City:<input type="text" name="city"> <br>
For which agent: <br>
<?php
include 'q4agen.php'
?>
<input type="submit" value="Add New Customer">
</form>
<p>
<hr>
<p>

<h2>Q5</h2>
<form action="q5.php" method="post">
New phone number:<input type="text" name="phone"><br>
For which customer:<br>
<?php
include 'q3cust.php'
?>
<input type="submit" value="Update Phone Number">
</form>
<p>
<hr>
<p>

<h2>Q6</h2>
<form action="q6.php" method="post">
Which customer would you like to delete today?<br>
<?php
include 'q3cust.php'
?>
<input type="submit" value = "Delete customer">
</form>
<p>
<hr>
<p>

<h2>Q7</h2>
<form action="q7.php" method="post">
Quantity:<input type="number" name="quantity"><br>
<input type="submit" value="Show Customers">
</form>
<p>
<hr>
<p>

<h2>Q8</h2>
<?php
include 'q8.php'
?>
<p>
<hr>
<p>

<h2>Q9</h2>
<form action="q9.php" method="post">
Which product are you looking for:<br>
<?php
include 'q3prod.php'
?>
<input type="submit" value="Show Total Number of Purchases">
</form>
</body>
</html>
