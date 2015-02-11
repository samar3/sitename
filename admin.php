<?php 
	
	//CONNECTION OF DATABASE
	require 'App/app.php';

	//GET DATA FROM DATABASE
	$admins = $db->query("SELECT * FROM admins",[],$conn);


	//DISPLAY DATA
	include "view.php";
	View::make("admin",["admins"=>$admins]);


 ?>