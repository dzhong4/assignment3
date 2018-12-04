<?php
   $query = "SELECT * FROM agent";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="agents" value="';
        echo $row["agentID"];
        echo '">' . $row["firstname"] . " " . $row["lastname"] . "<br>";
   }
   mysqli_free_result($result);
?>


