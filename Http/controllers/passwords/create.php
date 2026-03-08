<?php 

use Core\Database;
use Core\Validator;

$userId = $_SESSION['user']['id'];

$errors = [];

view("passwords/create.view.php", [
    'errors' => $_SESSION['errors'] ?? []
]);