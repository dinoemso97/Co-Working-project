<?php 

//Connect with database and server 

try {
	
	$config = new PDO('mysql: host=localhost; dbname=fotoart;','root','');
	$config->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
}
catch(PDOException $e) {
	
	echo $e->getMessage();
	die();
	
	
	
}



?>