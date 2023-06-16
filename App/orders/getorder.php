<?php
include '../App/db.php';


$query = "SELECT * FROM `orders_table`";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('read orders error!' . mysqli_error($conn, $result));
}
