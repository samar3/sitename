<?php 

	
	//CONNECTION OF DATABASE
	require 'App/app.php';

	//GET DATA FROM DATABASE
	$contacts = $db->query("SELECT * FROM contacts",[],$conn);

	//DISPLAY DATA
	View::make("contact",["contacts"=>$contacts,"title"=>"Contacts","active"=>"contact"]);


 ?>