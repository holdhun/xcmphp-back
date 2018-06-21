<?php

namespace app;

//use \App\Model\Medoo;

class Model
{
	private static $_instance;

        public static function instance()
        {
            if(!isset(self::$_instance))
            {
            	$config = include(CONFIG);
                self::$_instance = new \app\model\Medoo([
					'database_type' => $config['database_type'],
					'database_name' => $config['database_name'],
					'server' => $config['server'],
					'username' => $config['username'],
					'password' => $config['password'],
				]);
            }
            return self::$_instance;
        }


}