<?php
	
	require 'App/config/database.php';
	require 'App/db.php';
	require 'view.php';
	
	$db = new DB ($config);
	$conn = $db->connect();

	//CHECK THE CONNECTION SUCCESS
	if(!$conn) die("Error In DB Connection!"); 
 ?>