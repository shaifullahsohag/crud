<?php 

	// We declare some variables for database configuration
	$db_servername = '127.0.0.1';
	$db_username   = 'bdtuts';
	$db_password   = 1234;
	$database_name = 'php_crud';

	// Create connection
	$connected = new mysqli($db_servername, $db_username, $db_password, $database_name);

	// Check connection
	if ($connected->connect_error){
		die ($connected->connect_error);
	}
	
 ?>