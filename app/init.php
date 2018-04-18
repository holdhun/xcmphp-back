<?php



header("content-type:text/html;charset=utf-8");

//	负责自动加载
define('APP_PATH', __DIR__ . '/');
define('ROOT_PATH', __DIR__ . '/../');
define('VIEW_PATH',APP_PATH.'view/');
define('LIB_PATH',APP_PATH.'lib/');
define('MODEL_PATH',APP_PATH.'model/');



function __autoload($classname) {
    $classname = str_replace('\\','/',$classname) ;

    $filename = ROOT_PATH . str_replace('_','/',$classname) .".php";

    $filename = strtolower($filename);


    include_once($filename);
}





