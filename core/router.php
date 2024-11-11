<?php
$url = parse_url($_SERVER["REQUEST_URI"])["path"];
$routes = require base_path("routes.php");

if  (array_key_exists($url, $routes)) {
    require base_path($routes[$url]);
} else {
    abort();
}
