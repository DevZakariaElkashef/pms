<?php

include '../db.php';
include '../config.php';

$id = $_GET['id'];


// validate 
// $errors = [];

// if (is_integer($id)) {

// }

// $query = "DELETE FROM `products_table` WHERE `id` = $id";


// $result = mysqli_query($conn, $query);

// if (!$result) { 
//     die('error' . mysqli_error($conn, $result));
// }

Database::delete('products', $id);

header('Location:' . APP_URL . '/products/index.php');