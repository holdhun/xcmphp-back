<?php

/*
 *
 * Use the PSR -4 standard writing class and load class;
 *  Controller  control the input and output of data  and simple operation;
 *  Model    take the charge of database logic operations;
 *  Lib      include Third-party libraries;
 * 
 * */

namespace App\admin\Controller;

use App\Controller;


class index  extends  Controller
{
    

    public function index(){
        $info = [1,2,3,4];
		$this->assign('test',$info);
        $this->render();
    }

    
}
