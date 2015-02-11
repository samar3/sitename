<?php 

	
	//CONNECTION OF DATABASE
	require 'App/app.php';

	//GET DATA FROM DATABASE
	$sections = $db->query("SELECT * FROM sections",[],$conn);


	//DISPLAY DATA
	include "view.php";
	View::make("section",["sections"=>$sections]);


 ?>