<?php
const BASE_PATH = __DIR__.'/../';
require BASE_PATH. "core/functions.php";
$config = require base_path("config.php");
spl_autoload_register(function ($class) {
    $class = str_replace("\\", "/", $class);
    require base_path("$class.php");
});
require base_path("core/router.php");

