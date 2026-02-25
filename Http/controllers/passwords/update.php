<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$userID = 1;
// $_SESSION['user']['id'];

$errors = [];

$id   = $_POST['id'] ?? null;
$name = $_POST['name'] ?? '';
$login_data = $_POST['login_data'] ?? '';
$password = $_POST['password'] ?? '';

$sql  = "SELECT * FROM passwords WHERE id = :id";
$note = $db->query($sql, ['id' => $id])->findOrFail();

// Ensure the fetched record belongs to the current user (db column is `userID`)
authorize($note['userID'] == $userID);

// Validate name length (same rules as create/store)
$body_min_ln = 3;
$body_max_ln = 256;

if (! Validator::string($name, $body_min_ln, $body_max_ln)) {
    $errors['name'] = "The name must be between {$body_min_ln} and {$body_max_ln} characters";
}

if (! empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = [
        'name' => $name
    ];

    redirect("/password/edit?id={$id}");
}

$sql = "UPDATE passwords SET name = :name , login_data = :login_data , password = :password where id = :id";
$db->query($sql, [
    'name' => $name,
    'login_data' => $login_data,
    'password' => $password,
    'id'   => $id
]);

redirect('/passwords');