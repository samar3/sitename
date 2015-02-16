<?php 

	//CONNECTION OF DATABASE
	require 'App/app.php';

	//DELETE DATA FROM DATABASE
	$delete = $db->delete("contacts",$_GET['id'],$conn);
	
	header("Location: contact.php?message='success'");

?>
