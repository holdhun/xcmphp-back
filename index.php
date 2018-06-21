<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);

require __DIR__.'/vendor/autoload.php';
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
//echo 123;
//echo \core\Test::run();
//echo \app\index\Test::run();
//echo \app\index\controller\index::run();
define('PATH_PATH', __DIR__ . '/');
define('CONFIG',__DIR__.'/app/config.php');
require __DIR__.'/app/init.php';
require __DIR__.'/app/route.php';


