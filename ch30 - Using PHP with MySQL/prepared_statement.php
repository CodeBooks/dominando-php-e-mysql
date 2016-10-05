<?php
    // Create a new server connection
    $mysqli = new mysqli("127.0.0.1", "catalog_user", "secret", "catalog_prod");

    // Create the query and corresponding placeholders
    $query = "SELECT sku, name, price, description
              FROM products ORDER BY sku";

    // Create a statement object
    $stmt = $mysqli->stmt_init();

    // Prepare the statement for execution
    $stmt->prepare($query);

    .. Do something with the prepared statement

    // Recuperate the statement resources
    $stmt->close();

    // Close the connection
    $mysqli->close();

?>
