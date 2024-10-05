<?php
$heading = 'My notes';
$db = new Database($config['database']);
$notes = $db->query("SELECT * FROM notes WHERE user_id = 1")->fetchAll();
require "view/notes.view.php";