
<?php
require '../../db/database.php'; // connect to database

// views/admin/delete_product.php

$product_code = $_POST['product_code'] ?? '';

if ($product_code != '') {
    $sql = "DELETE FROM products WHERE productCode = '$product_code'";
    $db->exec($sql);
} // end if product_code

header('Location: product_manager.php'); // redirect back to product manager
exit; // end script
