<?php

$mysqli = new corporate_mysqli("localhost", "websiteuser", "secret", "corporate");

$pagesize = 4;

$recordstart = (int) $_GET['recordstart'];

$recordstart = (isset($_GET['recordstart'])) ? $recordstart : 0;

$query = "SELECT id AS `Order ID`, client_id AS `Client ID`, 
                    order_time AS `Order Time`, 
                    CONCAT('$', sub_total) AS `Sub Total`, 
                    CONCAT('$', shipping_cost) AS `Shipping Cost`, 
                    CONCAT('$', total_cost) AS `Total Cost`
                    FROM sales ORDER BY id LIMIT $recordstart, $pagesize";

$mysqli->tabular_output($query);

// Retrieve total rows in order to determine whether 'next' link should appear

$result = $mysqli->query("select count(client_id) as count FROM sales");

list($totalrows) = $result->fetch_row();

// Create the 'previous' link
if ($recordstart > 0) {
   $prev = $recordstart - $pagesize;
   $url = $_SERVER['PHP_SELF']."?recordstart=$prev";
      printf("<a href='%s'>Previous Page</a>", $url);
}

// Create the 'next' link
if ($totalrows > ($recordstart + $pagesize)) {
   $next = $recordstart + $pagesize;
   $url = $_SERVER['PHP_SELF']."?recordstart=$next";
   printf("<a href='%s'>Next Page</a>", $url);
}

?>