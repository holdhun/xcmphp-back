<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
define('PATH_PATH', __DIR__ . '/');
define('CONFIG',__DIR__.'/app/config.php');
require __DIR__.'/app/init.php';
require __DIR__.'/app/route.php';


