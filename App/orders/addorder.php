<?php 

include '../db.php';
include '../config.php';

if (isset($_POST)) {
    $name = $_POST['name'];


    $query = "INSERT INTO `orders_table` (`name`) VALUE ('$name')";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die('error adding' . mysqli_error($conn, $result));
    }

    header('Location:' . APP_URL . '/orders/index.php');
}