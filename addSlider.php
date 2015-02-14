<?php 

	//CONNECTION OF DATABASE
	require 'App/app.php';

	//DISPLAY DATA
	View::make("addSlider");
	

	//GET THE DATA FROM USERS 
	if (isset($_POST['add']))
	{

		$pic = htmlspecialchars($_POST['pic']);
		$title = htmlspecialchars($_POST['title']);
	

		$data = [":pic"=>$pic,":title"=>$title];


	//INSERT DATA INTO DATABASE
	$add = $db->add("sliders",$data,$conn);
	if($add != false) echo $add; 

	}


 
?>
