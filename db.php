<?php
  require  'medoo.php';

  $db = new medoo([
  	// required
  	'database_type' => 'mysql',
  	'database_name' => 'census',
  	'server' => 'localhost',
  	'username' => 'root',
  	'password' => '',
  	'charset' => 'utf8',

    'option' => [
		    PDO::MYSQL_ATTR_LOCAL_INFILE => true
	  ]
  ]);
?>
