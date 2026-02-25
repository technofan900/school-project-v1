<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$userId = 1; // temp id
// $_SESSION['user']['id'];

$sql = "SELECT * FROM passwords WHERE id = :id"; 
$note = $db->query($sql, ['id' => $_POST['id']])->findOrFail();

authorize($note['userID'] == $userId);

$sql ="DELETE FROM passwords WHERE id = :id";
$db->query($sql , ['id' => $_POST['id']]);
header('location: /passwords');
exit;
