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
    /**/
   $query= 'SELECT MAX(cusID) AS maxid FROM customer';
   $result=mysqli_query($connection,$query);
   if (!$result) {
          die("database max query failed.");
   }
   $row=mysqli_fetch_assoc($result);
   $key = intval($row["maxid"]) + 1;
   $cusid = (string)$key;
   $Agentid= $_POST["agents"];
   $phonenumber = $_POST["phone"];
   $city = $_POST["city"];
   $firstname =$_POST["fname"];
   $lastname =$_POST["lname"];
   if(strlen($phonenumber)<8||strlen($phonenumber)>8){
       die("Error: Invalid phonenumber digits, expect length 8, format 111-1111");
   }
   $query = "INSERT INTO customer (cusID,firstname,lastname,city,phonenumber,agentID)VALUES(\"$cusid\",\"$firstname\",\"$lastname\",\"$city\",\"$phonenumber\",\"$Agentid\")";
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Customer was added";
   mysqli_close($connection);
?>
</ol>
</body>
</html>


