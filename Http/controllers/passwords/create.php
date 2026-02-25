<?php 

use Core\Database;
use Core\Validator;

$userId = 1;
// $_SESSION['user']['id'];

$errors = [];

view("passwords/create.view.php", [
    'errors' => $_SESSION['errors'] ?? []
]);