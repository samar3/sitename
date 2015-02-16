<?php 
	

	//CONNECTION OF DATABASE
	require 'App/app.php';

	//GET DATA FROM DATABASE
	$services = $db->query("SELECT * FROM services",[],$conn);


	//DISPLAY DATA
	View::make("service",["services"=>$services,"title"=>"Services","active"=>"service"]);



 ?>