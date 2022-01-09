<?php

class Database{
	public static function connect(){
		$db = new mysqli('eu-cdbr-west-02.cleardb.net', 'bb59e85a77f12d', '3f1dabb8', 'heroku_6f3ccbaaf6cdfe4');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}

