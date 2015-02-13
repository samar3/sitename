<?php 

	
	//CONNECTION OF DATABASE
	require 'App/app.php';

	//GET DATA FROM DATABASE
	$mainSettings = $db->query("SELECT * FROM mainSettings",[],$conn);

	//DISPLAY DATA
	View::make("mainSetting",["mainSettings"=>$mainSettings]);


 ?>