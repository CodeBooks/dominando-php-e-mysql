<?php

   // Connect to the MySQL database
   $mysqli = new mysqli("localhost", "websiteuser", "secret", "helpdesk");

   // Assign the POSTed values for convenience
   $email = htmlentities($_POST['email']);
   $available = htmlentities($_POST['available']);

   // Create the UPDATE query
   $query = "UPDATE technicians SET available='$available' WHERE email='$email'";

   // Execute query and offer user output.
   if ($mysqli->query($query)) {

      echo "<p>Thank you for updating your profile.</p>";

      if ($available == 0) {
         echo "<p>Your tickets will be reassigned to another technician.</p>";
      }

   } else {
      echo "<p>There was a problem updating your profile.</p>";
   }

?>
