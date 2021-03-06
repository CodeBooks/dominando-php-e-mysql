<?php

    // Connect to the database server
    $dbh = new PDO("mysql:host=localhost;dbname=chp31", "webuser", "secret");

    // Create and prepare the query
    $query = "INSERT INTO products SET sku = :sku, title = :title";
    $stmt = $dbh->prepare($query);

    $sku = 'MN873213';
    $title = 'Minty Mouthwash';

    // Bind the parameters
    $stmt->bindParam(':sku', $sku);
    $stmt->bindParam(':title', $title);

    // Execute the query
    $stmt->execute();

    // Bind the parameters
    $stmt->bindParam(':sku', 'AB223234');
    $stmt->bindParam(':title', 'Lovable Lipstick');

    // Execute again
    $stmt->execute();
?>
