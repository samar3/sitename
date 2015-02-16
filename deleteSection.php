<?php 

	//CONNECTION OF DATABASE
	require 'App/app.php';

	//DELETE DATA FROM DATABASE
	$delete = $db->delete("sections",$_GET['id'],$conn);
	
	header("Location: section.php?message='success'");

?>
