<?php 

	//CONNECTION OF DATABASE
	require 'App/app.php';

	//DELETE DATA FROM DATABASE
	$delete = $db->delete("teams",$_GET['id'],$conn);
	
	header("Location: team.php?message='success'");

?>