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

function abort($statusCode = 404)
{
    require 'view/'.$statusCode.'.view.html';
}