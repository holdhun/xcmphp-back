<?php
    $config = include(CONFIG);
    //  获取URL路径
    $url = $_SERVER['REQUEST_URI'];

    $position = strpos($url, '?');

    $url = $position === false ? $url : substr($url, 0, $position);

    $url = trim($url, '/');

    $urlArray = explode('/', $url);

    $DefaultControllerName = 'index';
    $DefaultActionName = 'index';
    $DefaultModuleName = 'index';

        $moduleName = !empty($urlArray[0]) ? $urlArray[0] : $DefaultModuleName;

        if(!in_array($moduleName,$config['modules']) && $moduleName!==$DefaultModuleName){
            echo  $moduleName."模块找不到";
        }

        $controllerName = !empty($urlArray[1]) ? $urlArray[1] : $DefaultControllerName;

        $actionName = !empty($urlArray[2]) ? $urlArray[2] : $DefaultActionName;

        $moduleName = strtolower($moduleName);

        $controllerName = strtolower($controllerName);

        $actionName = strtolower($actionName);

        define('MODULE_NAME',$moduleName);

        define('CONTROLLER_NAME',$controllerName);

        define('ACTION_NAME',$actionName);

        if(in_array($moduleName,$config['modules']) || $moduleName==$DefaultModuleName)
        $controllerName = "\\app\\".$moduleName."\\controller\\".$controllerName;

        $obj = new $controllerName();

        $action = $actionName;

        $obj->$action();





