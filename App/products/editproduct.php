<?php 

include '../db.php';
include '../config.php';

if (isset($_POST)) {

    // validatin

    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $id = $_POST['id'];

    // $query = "UPDATE `products_table` SET `NAME`='$name' WHERE `id` = $id";

    // $result = mysqli_query($conn, $query);

    // if (!$result) {
    //     die('error adding' . mysqli_error($conn, $result));
    // }

    Database::update('products',$id, 'NAME', "$name");
    Database::update('products',$id, 'price', "$price");
    Database::update('products',$id, 'category_id', "$category_id");

    header('Location:' . APP_URL . '/products/index.php');
}