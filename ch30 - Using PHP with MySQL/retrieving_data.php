<?php

    $mysqli = new mysqli("127.0.0.1", "catalog_user", "secret", "catalog_prod");

    // Create the query
    $query = "SELECT sku, name, price FROM products ORDER by name";

    // Send the query to MySQL
    $result = $mysqli->query($query, MYSQLI_STORE_RESULT);

    // Iterate through the result set
    while(list($sku, $name, $price) = $result->fetch_row())
        printf("(%s) %s: \$%s <br />", $sku, $name, $price);

?>
