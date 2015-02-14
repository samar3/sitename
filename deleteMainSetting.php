<?php 

	//CONNECTION OF DATABASE
	require 'App/app.php';

	//DELETE DATA FROM DATABASE
	$delete = $db->delete("mainsettings",$_GET['id'],$conn);
	
	header("Location: mainsetting.php?message='success'");

?>
