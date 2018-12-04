<!--Homepage for Assignment 3, quesion1-10-->
<!--Dzhong4-->
<!--CS3319-->
<!DOCTYPE html>
<html>
<head>
    <title> Ass3 </title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
<!--connect to databases-->
    <?php
    include 'connectdb.php';
    ?>
    <!--connect to css page-->
    <link rel="stylesheet" type="text/css" href="Ass3.css"/>
</head>


<body>
<div id="main">
    <h1>Assign3 dzhong4</h1>
    <!--Question1-->
    <div class="Question" id="Q1">
        <h2>Q1</h2>
        <!--Form, that connect to question page-->
        <form action="q1prod.php" method="post">
            <!--Print all customer-->
            <?php
            include 'q1.php';
            ?>
            <!--Show all product for the customer-->
            <input type="submit" value="Get Product purchased">
        </form>
    </div>
    <!--Question2-->
    <div class="Question" id="Q2">
        <h2>Q2</h2>
        <p>List all the products in alphabetical order by description OR in order by price.</p>
        <!--Show order-->
        <form action="q2.php" method="post">
            <input type = "radio" name = "order" value="description asc">Ascending by Description<br>
            <input type = "radio" name = "order" value="description desc">Descending by Description<br>
            <input type = "radio" name = "order" value="cost asc">Ascending by Cost<br>
            <input type = "radio" name ="order" value="cost desc">Descending by Cost<br>
            <input type="submit" value="Get product list">
        </form>
    </div>
    <!--Question3-->
    <div class="Question" id="Q3">
        <p>Insert a new purchase</p>
        <form action="q3.php" method="post">
            Customer:<br>
            <!--List all customer-->
            <?php
            include 'q1.php';
            ?>
            <br>
            Buy:<br>
            <!--List all product-->
            <?php
            include 'q3prod.php'
            ?>
            <br>
            Quantity:<input type="number" name="quantity">
            <br>
            <input type="submit" value="Add">
        </form>
    </div>
    <!--Question4-->
    <div class="Question" id="Q4">
        <h2>Q4</h2>
        <p>Insert a new customer</p>
        <form action="q4.php" method="post">
            Customer First Name:  <input type="text" name="fname"><br>
            Customer Last Name:   <input type="text" name="lname"><br>
            Customer Phone Number:<input type="text" name="phone"><br>
            Customer City:        <input type="text" name="city"> <br>
            <br>
            Serve agent: <br>
            <!--List all agent-->
            <?php
            include 'q4agen.php'
            ?>
            <input type="submit" value="Add">
        </form>
    </div>
    <!--Question5-->
    <div class="Question" id="Q5">
        <h2>Q5</h2>
        <p>Update a customer's phone number, format 111-1111</p>
        <form action="q5.php" method="post">
            New phone number:<input type="text" name="phone"><br>
            <br>
            For customer:<br>
            <!--List all customer with phone number-->
            <?php
            include 'q3cust.php'
            ?>
            <input type="submit" value="Update">
        </form>
    </div>
    <!--Question6-->
    <div class="Question" id="Q6">
        <h2>Q6</h2>
        <p>Delete a customer</p>
        <form action="q6.php" method="post">
            <!--List all customer-->
            <?php
            include 'q1.php';
            ?>
            <input type="submit" value = "Delete">
        </form>
    </div>
    <!--Question7-->
    <div class="Question" id="Q7">
        <h2>Q7</h2>
        <p>customer names who bought more than a given quantity of any product.</p>
        <form action="q7.php" method="post">
            Quantity:<input type="number" name="quantity"><br>
            <input type="submit" value="Show Customers">
        </form>
    </div>
    <!--Quesion8-->
    <div class="Question" id="Q8">
        <h2>Q8</h2>
        <p>Product that has never been purchased</p>
        <div id="q8list">
            <!--List all product that never been purchased-->
            <?php
            include 'q8.php'
            ?>
        </div>
    </div>
    <!--Question9-->
    <div class="Question" id="Q9">
        <h2>Q9</h2>
        <p>total number of purchases for a particular product </p>
        <form action="q9.php" method="post">
            Which product are you looking for:<br>
            <!--List all product-->
            <?php
            include 'q3prod.php'
            ?>
            <input type="submit" value="Show Total Number of Purchases">
        </form>
    </div>
    <!--Question 9-->
    <div class="Question" id="Q10">
        <h2>Q10</h2>
        <p>Add Image for customer</p>
        <!--Add customer image to databases-->
        <form action="q10.php" method="post">
            Image url:<input type="text" name="url"><br>
            <br>
            For customer:<br>
            <!--List all customer-->
            <?php
            include 'q1.php'
            ?>
            <input type="submit" value="Insert">
        </form>
    </div>
</div>
</body>
</html>
