<?php
require "functions.php";
require "Database.php";
$config = require "config.php";
//require "routes.php";

$db = new Database($config['database']);
$posts = $db->query("SELECT * FROM `posts`")->fetchAll();

foreach ($posts as $post) {
    echo $post["title"] . "<br>";
}