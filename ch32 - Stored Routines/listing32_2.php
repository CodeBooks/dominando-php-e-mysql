<?php

    // Instantiate the mysqli class
    $db = new mysqli("localhost", "websiteuser", "jason", "corporate");

    // Assign the employeeID
    $eid = htmlentities($_POST['employeeid']);

    // Execute the stored procedure
    $result = $db->query("SELECT calculate_bonus('$eid')");

    $row = $result->fetch_row();

   printf("Your bonus is \$%01.2f",$row[0]);
?>
