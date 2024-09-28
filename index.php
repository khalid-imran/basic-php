<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laracast - basic PHP</title>
</head>
<body>
    <h1>Recommended Books</h1>
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
    ?>

    <?php foreach ($filteredBooks as $book): ?>
        <ul>
            <li>
                <a href="<?= $book['download_url']?>">
                    <?= $book['name']?>
                </a>
                <span>
                    <?= $book['releaseYear']?>
                </span>
            </li>
        </ul>
    <?php endforeach ?>;

</body>
</html>