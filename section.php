
<?php

	
	//CONNECTION OF DATABASE
	require 'App/app.php';

	//GET DATA FROM DATABASE
	$sections = $db->query("SELECT * FROM sections",[],$conn);


	//DISPLAY DATA
	View::make("section",["sections"=>$sections,"title"=>"Sections","active"=>"section"]);


 ?>