<?php
 
function db_connect(){
	$dsn = 'mysql:host=localhost;dbname=tmF2019db;charset=utf8';
	$user = 'tmF2019db';
	$password = 'ILOYm9GY62kj9pJs';
	
	try{
		$dbh = new PDO($dsn, $user, $password);
		return $dbh;
	}catch (PDOException $e){
	    	print('Error:'.$e->getMessage());
	    	die();
	}
}
 
?>