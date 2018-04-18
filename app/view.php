<?php
namespace App;
Class View {

    protected $data = array();

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function render(){
        extract($this->data);
        return require APP_PATH.MODULE_NAME.'/view/'.CONTROLLER_NAME.'/'.ACTION_NAME.'.php';
    }
}