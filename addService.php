<?php 


	//CONNECTION OF DATABASE
	require 'App/app.php';

	//DISPLAY DATA
	View::make("addService");
	

	//GET THE DATA FROM USERS 
	if (isset($_POST['add']))

	{

		$name = htmlspecialchars($_POST['name']);
		$body = htmlspecialchars($_POST['body']);
		$pic = htmlspecialchars($_POST['pic']);
	

		$data = [":name"=>$name,":body"=>$body,":pic"=>$pic];


	//INSERT DATA INTO DATABASE
	$add = $db->add("services",$data,$conn);
	if($add != false) echo $add; 

	}




 ?>
