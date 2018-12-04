<?php
/*Dzhong1
 * Cs3319
 * Connect to data bases
 * */
$dbhost = "localhost";
$dbuser= "root";
$dbpass = "739145";/*Mysql password*/
$dbname = "dzhong4assign3db";/*Databases name*/
$connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
     die("database connection failed :" .
     mysqli_connect_error() .
     "(" . mysqli_connect_errno() . ")"
         );
    }
?>
