<?php 


	//CONNECTION OF DATABASE
	require 'App/app.php';

	//DISPLAY DATA
	View::make("addAdmin");
	

	//GET THE DATA FROM USERS 
	if (isset($_POST['add']))

	{

		$name = htmlspecialchars($_POST['name']);
		$username = htmlspecialchars($_POST['username']);
		$password = htmlspecialchars($_POST['password']);
	

		$data = [":name"=>$name,":username"=>$username,":password"=>$password];


	//INSERT DATA INTO DATABASE
	$add = $db->add("admins",$data,$conn);
	if($add != false) echo $add; 

	}




 ?>
