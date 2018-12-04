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
<h1>Welcome new customer:</h1>
<ol>
<?php
   $query1= 'SELECT MAX(cusID) AS maxid FROM customer';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database max query failed.");
   }
   $row=mysqli_fetch_assoc($result);
   $newkey = intval($row["maxid"]) + 1;
   $cusid = (string)$newkey;
   $whichAgent= $_POST["agents"];
   $phone = $_POST["phone"];
   $city = $_POST["city"];
   $firstname =$_POST["fname"];
   $lastname =$_POST["lname"];
   $query = 'INSERT INTO customer VALUES("'.$cusid.'","'.$firstname.'","' . $lastname . '","' . $city . '","' . $phone . '","' . $whichAgent . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Customer was added!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>


