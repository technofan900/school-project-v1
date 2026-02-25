<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$userId = 1;
// $_SESSION['user']['id'];

$sql = "SELECT * FROM passwords WHERE id = :id"; 
$note = $db->query($sql, ['id' => $_GET['id']])->findOrFail();

authorize ($note['userID'] == $userId);

view("passwords/editpassword.view.php", [
    'errors' => $_SESSION['errors'] ?? [],
    'note' => $note
]);