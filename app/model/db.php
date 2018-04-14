<?php
namespace App\Model;

use  PDO;
class DB{

        private static $_instance;

        public static function instance()
        {
            if(!isset(self::$_instance))
            {
            	$config = include(CONFIG);
                self::$_instance = new PDO($config['dsn'],$config['username'],$config['password']);
                self::$_instance->exec('SET NAMES utf8');
            }
            return self::$_instance;
        }

        public function showtime()
        {

            return date('Y-m-d H:i:s',time());

        }
}