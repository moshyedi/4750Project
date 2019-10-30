<?php
class DbUtil{
	public static $user = "rjc8ez"; 
	public static $pass = "ryan22";
	public static $host = "cs4750.cs.virginia.edu"; // DB Host
	public static $schema = "rjc8ez_Project"; // DB Schema

	public static function loginConnection(){
	$db = new mysqli(DbUtil::$host, DbUtil::$user, DbUtil::$pass, DbUtil::$schema);

	if($db->connect_errno){
		echo("Could not connect to db");		
		$db->close();
		exit();
	}
	return $db;
	}
}
?>
