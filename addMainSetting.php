<?php 


	//CONNECTION OF DATABASE
	require 'App/app.php';

	//DISPLAY DATA
	View::make("addMainSetting");
	

	//GET THE DATA FROM USERS 
	if (isset($_POST['add']))

	{

		$siteName = htmlspecialchars($_POST['siteName']);
		$copyRight = htmlspecialchars($_POST['copyRight']);
		$facebook = htmlspecialchars($_POST['facebook']);
		$twitter = htmlspecialchars($_POST['twitter']);
		$googlePlus = htmlspecialchars($_POST['googlePlus']);



	

		$data = [":siteName"=>$siteName,":copyRight"=>$copyRight,":facebook"=>$facebook, 
				":twitter"=>$twitter,":googlePlus"=>$googlePlus];


	//INSERT DATA INTO DATABASE
	$add = $db->add("mainsettings",$data,$conn);
	if($add != false) echo $add; 

	}




 ?>
