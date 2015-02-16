<?php 


	//CONNECTION OF DATABASE
	require 'App/app.php';

	//DISPLAY DATA
	View::make("addGallery");
	

	//GET THE DATA FROM USERS 
	if (isset($_POST['add']))

	{

		$pic = htmlspecialchars($_POST['pic']);
		$notes = htmlspecialchars($_POST['notes']);

	

		$data = [":pic"=>$pic,":notes"=>$notes];


	//INSERT DATA INTO DATABASE
	$add = $db->add("galleries",$data,$conn);
	if($add != false) echo $add; 

	}




 ?>
