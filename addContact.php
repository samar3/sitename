<?php 


	//CONNECTION OF DATABASE
	require 'App/app.php';

	//DISPLAY DATA
	View::make("addContact");
	

	//GET THE DATA FROM USERS 
	if (isset($_POST['add']))

	{

		$name = htmlspecialchars($_POST['name']);
		$mail = htmlspecialchars($_POST['mail']);
		$msg = htmlspecialchars($_POST['msg']);
	

		$data = [":name"=>$name,":mail"=>$mail,":msg"=>$msg];


	//INSERT DATA INTO DATABASE
	$add = $db->add("contacts",$data,$conn);
	if($add != false) echo $add; 

	}




 ?>
