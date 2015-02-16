<?php 

	
	//CONNECTION OF DATABASE
	require 'App/app.php';

	//GET DATA FROM DATABASE
	$teams = $db->query("SELECT * FROM teams",[],$conn);

	//DISPLAY DATA
	View::make("team",["teams"=>$teams,"title"=>"Teams","active"=>"team"]);


 ?>