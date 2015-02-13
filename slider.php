<?php 

	
	//CONNECTION OF DATABASE
	require 'App/app.php';

	//GET DATA FROM DATABASE
	$sliders = $db->query("SELECT * FROM sliders",[],$conn);

	//DISPLAY DATA
	View::make("slider",["sliders"=>$sliders]);


 ?>