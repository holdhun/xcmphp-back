<?php
namespace App;
    Class View {


        protected $data = null;

        private static $_instance;

        public static function instance()
        {
            if(!isset(self::$_instance))
            {
                self::$_instance = new self;
            }
            return self::$_instance;
        }

        public static function set($name, $value)
        {
            self::instance()->$name=$value;

        }
        public static function get($name)
        {
           return  self::instance()->$name;

        }

        public static function render(){

            return self::instance()->tpl();
        }
        public function tpl()
        {
            return require APP_PATH.MODULE_NAME.'/view/'.CONTROLLER_NAME.'/'.ACTION_NAME.'.php';

        }


        public function __set($name, $value)
        {

            return $this->data["$name"] = $value;

        }
        public function __get($name)
        {

            return $this->data["$name"];

        }



    }