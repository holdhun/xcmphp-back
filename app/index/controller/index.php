<?php

/*
 *
 * Use the PSR -4 standard writing class and load class;
 *  Controller  control the input and output of data  and simple operation;
 *  Model    take the charge of database logic operations;
 *  Lib      include Third-party libraries;
 * 
 * */

namespace app\index\controller;


class Index
{

    public function index(){
        //echo "app-index-controller-index-index";
        $model =new \app\model\Test();
        $data = $model->getAll('admin');
        var_dump($data);
    }

    public static function run(){
        echo "app-index-controller-index-index";
    }

}
