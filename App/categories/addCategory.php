<?php 

include '../db.php';
include '../config.php';

if (isset($_POST)) {
    $name = $_POST['name'];

    Database::insert('categories', ['NAME'], [$name]);
    header('Location:' . APP_URL . '/categories/index.php');
}