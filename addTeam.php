<?php 

	//CONNECTION OF DATABASE
	require 'App/app.php';

	//DISPLAY DATA
	View::make("addTeam");
	

	//GET THE DATA FROM USERS 
	if (isset($_POST['add']))
	{

		$name = htmlspecialchars($_POST['name']);
		$job = htmlspecialchars($_POST['job']);
		$pic = htmlspecialchars($_POST['pic']);
		$about = htmlspecialchars($_POST['about']);

		$data = [":column1"=>$name,":column2"=>$job,":column3"=>$pic,":column4"=>$about];


	//INSERT DATA INTO DATABASE
	$add = $db->add("teams",$data,$conn);
	if($add != false) echo $add; 

	}


 
?>
