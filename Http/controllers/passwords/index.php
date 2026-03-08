<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$userId = $_SESSION['user']['id'];

// (short if stmt) checks if folder_id is empty,
// if is then gives null, if not then gives folder_id in int form 
$folderId = isset($_GET['folder_id']) && $_GET['folder_id'] !== '' ? (int) $_GET['folder_id'] : null;

$params = ['userID' => $userId];
$sql = "SELECT id, name, folder_id FROM passwords WHERE userID = :userID";
if ($folderId) {
    $sql .= " AND folder_id = :folder_id";
    $params['folder_id'] = $folderId;
}
$sql .= " ORDER BY id DESC";
$notes = $db->query($sql, $params)->get();

// folder code
$folder_sql= "SELECT id, user_id, folder_name FROM folders WHERE user_id = :user_id ORDER BY id DESC";

$folders = $db->query($folder_sql, ['user_id' => $userId])->get();

view("passwords/passwords.view.php", [
    'notes' => $notes,
    'folders' => $folders,
    'currentFolder' => $folderId
]);