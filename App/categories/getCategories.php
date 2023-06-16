<?php
include '../App/db.php';


// $query = "SELECT * FROM `categories`";
// $result = mysqli_query($conn, $query);

// if (!$result) {
//     die('read categories error!' . mysqli_error($conn, $result));
// }


$result  = Database::fetchAll('categories');