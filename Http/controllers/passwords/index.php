<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$userId = $_SESSION['user']['id'];

$sql = "SELECT id, name FROM passwords WHERE id = 1 ORDER BY id DESC";
$notes = $db->query($sql)->get();


view("passwords/passwords.view.php", [
    'notes' => $notes
]);


//hard coded for now to check if it even works, CHANGE BACK
// userID = :userID
// , ['userID' => $userId]