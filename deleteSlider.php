<?php 

	//CONNECTION OF DATABASE
	require 'App/app.php';

	//DELETE DATA FROM DATABASE
	$delete = $db->delete("sliders",$_GET['id'],$conn);
	
	header("Location: slider.php?message='success'");

?>