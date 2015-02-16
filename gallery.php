<<<<<<< HEAD

<?php

	
	//CONNECTION OF DATABASE
	require 'App/app.php';

	//GET DATA FROM DATABASE
	$galleries = $db->query("SELECT * FROM galleries",[],$conn);


	//DISPLAY DATA
	View::make("gallery",["galleries"=>$galleries,"title"=>"Galleries","active"=>"gallery"]);


 ?>
=======
<?php 
	

	//CONNECTION OF DATABASE
	require 'App/app.php';

	//GET DATA FROM DATABASE
	$galleries = $db->query("SELECT * FROM galleries",[],$conn);


	//DISPLAY DATA
	View::make("gallery",["galleries"=>$galleries]);



 ?>
>>>>>>> 3ce4512c6cc5cdf4b3850fa47d149c1a430a9a67
