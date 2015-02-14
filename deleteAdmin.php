<?php 

	//CONNECTION OF DATABASE
	require 'App/app.php';

	//DELETE DATA FROM DATABASE
	$delete = $db->delete("admins",$_GET['id'],$conn);
	
	header("Location: admin.php?message='success'");

?>
