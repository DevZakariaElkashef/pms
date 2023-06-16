<?php

include '../db.php';
include '../config.php';

$id = $_GET['id'];


// $query = "DELETE FROM `categories` WHERE `id` = $id";


// $result = mysqli_query($conn, $query);

// if (!$result) { 
//     die('error' . mysqli_error($conn, $result));
// }


Database::delete('categories', $id);

header('Location:' . APP_URL . '/categories/index.php');
