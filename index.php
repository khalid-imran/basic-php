<?php
$books = [
    [
        "name" => "PHP",
        "author" => "New name",
        "download_url" => "https://google.com",
        "releaseYear" => 2010,
    ],
    [
        "name" => "Javascript",
        "author" => "New name",
        "download_url" => "https://google.com",
        "releaseYear" => 2012,
    ],
    [
        "name" => "Python",
        "author" => "New name",
        "download_url" => "https://google.com",
        "releaseYear" => 2016,
    ],
];

function filter($items, $fn)
{
    $filteredItems = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}
$filteredBooks = array_filter($books, function ($book) {
    return $book["releaseYear"] > 2010;
});

require "index.view.php";