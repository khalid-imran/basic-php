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
    <?php
        $book = "Dark Matter";
        $read = true
    ?>
    <h1>
        <?php
            if ($read) {
                echo "You have read the book " . $book;
            } else {
                echo "You have not read the book " . $book;
            }
        ?>
    </h1>
</body>
</html>