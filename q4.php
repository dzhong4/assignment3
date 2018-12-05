<!DOCTYPE html>
<!--Insert a new customer-->
<!--Dzhong4-->
<!--Cs3319-->
<html>
<head>
    <meta charset="utf-8">
    <title>Company</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>New customer:</h1>
<ol>
    <?php
    $query= 'SELECT MAX(cusID) AS maxid FROM customer';
    $result=mysqli_query($connection,$query);
    if (!$result) {
        die("database max query failed.");
    }
    $row=mysqli_fetch_assoc($result);
    /*Give new customer a cusID with maxid +1*/
    $key = intval($row["maxid"]) + 1;
    if(key>99){
        die("CusID reach the upper limit");
    }
    $cusid = (string)$key;
    $Agentid= $_POST["agents"];
    $phonenumber = $_POST["phone"];
    $city = $_POST["city"];
    $firstname =$_POST["fname"];
    $lastname =$_POST["lname"];
    if ($firstname==""){
        echo '<a href="index.php">Go back to home</a>'."<br>";
        die("Please enter a first name");
    }
    if ($lastname==""){
        echo '<a href="index.php">Go back to home</a>'."<br>";
        die("Please enter a last name");
    }
    /*make sure the phone number has 8 dig*/
    if(strlen($phonenumber)<8||strlen($phonenumber)>8){
        die("Error: Invalid phonenumber digits, expect length 8, format 111-1111");
    }
    if ($city==""){
        echo '<a href="index.php">Go back to home</a>'."<br>";
        die("Please enter a City");
    }
    if ($Agentid==""){
        echo '<a href="index.php">Go back to home</a>'."<br>";
        die("Please choose a Agent");
    }
    /*Insert*/
    $query = "INSERT INTO customer (cusID,firstname,lastname,city,phonenumber,agentID)VALUES(\"$cusid\",\"$firstname\",\"$lastname\",\"$city\",\"$phonenumber\",\"$Agentid\")";
    if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
    echo "Customer was added!"."<br>";
    echo '<a href="index.php">Go back to home</a>';
    mysqli_close($connection);
    ?>
</ol>
</body>
</html>
