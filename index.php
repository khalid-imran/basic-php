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
                'Book 1', 'Book 2', 'Book 3', 'Book 4', 'Book 5', 'Book 6', 'Book 7',
        ];
    ?>

    <?php foreach ($books as $book): ?>
        <ul>
            <li><?= $book?></li>
        </ul>
    <?php endforeach ?>;

</body>
</html>