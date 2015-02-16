
<?php

	
	//CONNECTION OF DATABASE
	require 'App/app.php';

	//GET DATA FROM DATABASE
	$galleries = $db->query("SELECT * FROM galleries",[],$conn);


	//DISPLAY DATA
	View::make("gallery",["galleries"=>$galleries,"title"=>"Galleries","active"=>"gallery"]);


 ?>
