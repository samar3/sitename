<?php 

	//CONNECTION OF DATABASE
	require 'App/app.php';

	//DELETE DATA FROM DATABASE
	$delete = $db->delete("galleries",$_GET['id'],$conn);
	
	header("Location: gallery.php?message='success'");

?>
