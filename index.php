<?php
require "functions.php";
require "Database.php";
//require "routes.php";

$db = new Database();
$posts = $db->query("SELECT * FROM `posts`")->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo $post["title"] . "<br>";
}