<?php
include '../App/db.php';


// $query = "SELECT * FROM `products_table`";
// $result = mysqli_query($conn, $query);

// if (!$result) {
//     die('read orders error!' . mysqli_error($conn, $result));
// }

$result = Database::join('products', 'categories', 'products.category_id', 'categories.id', 'products.id, products.NAME, products.price, categories.name AS category');