<?php
$url = parse_url($_SERVER["REQUEST_URI"])["path"];
$routes = require "routes.php";

if  (array_key_exists($url, $routes)) {
    require $routes[$url];
} else {
    abort();
}
