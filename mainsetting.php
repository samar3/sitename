<?php 

	
	//CONNECTION OF DATABASE
	require 'App/app.php';

	//GET DATA FROM DATABASE
	$mainsettings = $db->query("SELECT * FROM mainsettings",[],$conn);

	//DISPLAY DATA
	View::make("mainsetting",["mainsettings"=>$mainsettings]);


 ?>
