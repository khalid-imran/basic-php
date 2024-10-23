<?php
$heading = 'Create Notes';
$db = new Database($config['database']);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    if (empty($_POST['title'])) {
        $errors['title'] = 'Title is required';
    }
    if (empty($_POST['body'])) {
        $errors['body'] = 'Body is required';
    }
    if (empty($errors)) {
        $db->query("INSERT INTO notes(title, body, user_id) VALUES(:title, :body, :user_id)", [
            'title' => $_POST['title'],
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }

}
require "view/notes-create.view.php";