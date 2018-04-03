<?php
/**
 * 
 * @authors ${author} (${email})
 * @date    2018-04-02
 * @version $Id$
 */

class Connection {
    
    public static function make($config)
    {
    	try {
		// return new PDO('mysql:host=127.0.0.1:8889;dbname=php-learning', 'root', 'root'); 
		return new PDO (
				$config['connection'].'; dbname='.$config['name'],
				$config['username'],
				$config['password'],
				$config['options']
			);

		}catch (PDOException $e){
			die($e->getMessage());
		}
    }
}