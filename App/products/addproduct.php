<?php 

include '../db.php';
include '../config.php';

if (isset($_POST)) {
    
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    // $query = "INSERT INTO `products_table` (`name`) VALUE ('$name')";

    // $result = mysqli_query($conn, $query);

    // if (!$result) {
    //     die('error adding' . mysqli_error($conn, $result));
    // }

    Database::insert('products', ['name', 'category_id', 'price'], [$name, $category_id, $price]);

    header('Location:' . APP_URL . '/products/index.php');
}