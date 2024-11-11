<?php
function urlIs($value)
{
    return $_SERVER["REQUEST_URI"] == $value;
}
function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function abort($statusCode = 404) {
    require 'views/'.$statusCode.'.views.php';
}
function authorized($condition, $statusCode = 403) {
    if (!$condition) {
        abort($statusCode);
    }
}
function base_path($path)
{
    return BASE_PATH.$path;
}
function view($path, $attribute = [])
{
    extract($attribute);
    require base_path('views/'.$path);
}
