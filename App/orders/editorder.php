<?php 

include '../db.php';
include '../config.php';

if (isset($_POST)) {

    // validatin

    $name = $_POST['name'];
    $id = $_POST['id'];

    $query = "UPDATE `orders_table` SET `NAME`='$name' WHERE `id` = $id";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die('error adding' . mysqli_error($conn, $result));
    }

    header('Location:' . APP_URL . '/orders/index.php');
}