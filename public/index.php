<?php
const BASE_PATH = __DIR__.'/../';
require BASE_PATH. "functions.php";
$config = require base_path("config.php");
spl_autoload_register(function ($class) {
   require base_path("$class.php");
});
require base_path("router.php");

