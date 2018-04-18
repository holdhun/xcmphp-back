<?php

namespace App;

class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function assign($name, $value)
    {
        $this->view->assign($name, $value);
    }

    public function render()
    {
        $this->view->render();
    }
}