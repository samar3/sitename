<?php 

	
	//CONNECTION OF DATABASE
	require 'App/app.php';

	//GET DATA FROM DATABASE
	$mainsettings = $db->query("SELECT * FROM mainsettings",[],$conn);

	//DISPLAY DATA
<<<<<<< HEAD
	View::make("mainSetting",["mainSettings"=>$mainSettings,"title"=>"MainSettings","active"=>"mainSetting"]);
=======
	View::make("mainsetting",["mainsettings"=>$mainsettings]);
>>>>>>> 3ce4512c6cc5cdf4b3850fa47d149c1a430a9a67


 ?>
