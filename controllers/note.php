<?php
require 'Response.php';
$db = new Database($config['database']);
$note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']])->fetch();
if (!$note) {
    abort();
}
$currentUserId = 1;
if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}
$heading = $note['title'];
require "view/note.view.php";