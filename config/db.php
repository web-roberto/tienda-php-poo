<?php
class Database{
	public static function connect(){

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$db = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
$db->query("SET NAMES 'utf8'");
return $db;
}
}
// ANTES DELL DEPLOYMENT
//		$db = new mysqli('eu-cdbr-west-02.cleardb.net', 'bb59e85a77f12d', '3f1dabb8', 'heroku_6f3ccbaaf6cdfe4');
//		$db->query("SET NAMES 'utf8'");
//		return $db;

?>