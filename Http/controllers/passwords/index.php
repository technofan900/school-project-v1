<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$userId = $_SESSION['user']['id'];

$sql = "SELECT name FROM passwords WHERE userID = :userID ORDER BY id DESC";
$notes = $db->query($sql, ['userID' => $userId])->get();


view("passwords/passwords.view.php", [
    'notes' => $notes
]);
