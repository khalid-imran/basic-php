<?php
require 'validator.php';
$heading = 'Create Notes';
$db = new Database($config['database']);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $validator = new Validator();
    $errors = [];
    if (!$validator->string($_POST['title'], 1, 100)) {
        $errors['title'] = 'A title is no more than 100 characters is required';
    }
    if (!$validator->string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body is no more than 1000 characters is required';
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