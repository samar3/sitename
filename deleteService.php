<?php 

	//CONNECTION OF DATABASE
	require 'App/app.php';

	//DELETE DATA FROM DATABASE
	$delete = $db->delete("services",$_GET['id'],$conn);
	
	header("Location: service.php?message='success'");

?>
