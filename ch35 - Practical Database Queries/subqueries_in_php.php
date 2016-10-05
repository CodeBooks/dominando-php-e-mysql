<?php
   $mysqli = new corporate_mysqli("localhost", "websiteuser", 
                                  "secret", "corporate");

   $query = "SELECT id, first_name, last_name FROM members 
             WHERE zip = (SELECT zip FROM members WHERE id=1)";

   $mysqli->tabular_output($query);

?>
