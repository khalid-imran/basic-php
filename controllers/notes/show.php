<?php
use Core\Database;
$db = new Database($config['database']);
$note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']])->findOrFail();
$currentUserId = 1;
authorized($note['user_id'] === $currentUserId);
view("notes/show.view.php", [
    "heading" => $note['title'],
    'note' => $note,
]);