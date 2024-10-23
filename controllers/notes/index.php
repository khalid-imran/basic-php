<?php
$heading = 'My notes';
$db = new Database($config['database']);
$notes = $db->query("SELECT * FROM notes WHERE user_id = 1")->get();
require "views/notes/index.view.php";