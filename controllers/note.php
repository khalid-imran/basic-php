<?php
$db = new Database($config['database']);
$note = $db->query("SELECT * FROM notes WHERE id = :id", [':id' => $_GET('id')])->fetch();
$heading = $note['title'];
require "view/note.view.php";