<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$userId = 1;
// $_SESSION['user']['id'];

$sql = "SELECT * FROM passwords WHERE id = :id"; 
$note = $db->query($sql, ['id' => $_GET['id']])->findOrFail();


// dd([
//   'session_user_id' => $_SESSION['user']['id'],
//   'note_user_id' => $note['user_id'],
//   'note_id' => $note['id']
// ]);

authorize($note['userID'] == $userId);

view("passwords/showpassword.view.php", [
    'note' => $note
]);