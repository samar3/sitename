<?php 


	//CONNECTION OF DATABASE
	require 'App/app.php';

	//DISPLAY DATA
	View::make("addSection");
	

	//GET THE DATA FROM USERS 
	if (isset($_POST['add']))

	{

		$name = htmlspecialchars($_POST['name']);
		$description = htmlspecialchars($_POST['description']);
		
	

		$data = [":name"=>$name,":description"=>$description];


	//INSERT DATA INTO DATABASE
	$add = $db->add("sections",$data,$conn);
	if($add != false) echo $add; 

	}




 ?>
