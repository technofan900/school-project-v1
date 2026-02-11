<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$userId = 1;

// $_SESSION['user']['id'];

$sql = "SELECT id, name FROM passwords WHERE userID = :userID ORDER BY id DESC";
$notes = $db->query($sql, ['userID' => $userId])->get();


view("passwords/passwords.view.php", [
    'notes' => $notes
]);


//hard coded for now to check if it even works, CHANGE BACK (edit - works now??? Me be scizo)
// userID = :userID
// , ['userID' => $userId]