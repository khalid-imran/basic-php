<?php
require 'Response.php';
$db = new Database($config['database']);
$note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']])->findOrFail();
$currentUserId = 1;
authorized($note['user_id'] === $currentUserId);
$heading = $note['title'];
require "view/note.view.php";