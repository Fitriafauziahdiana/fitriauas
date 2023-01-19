<?php

define('HOST', 'localhost:3307');
define('USER', 'root');
define('PASS', '');
define('DB', 'db_fitria');

$db_connect = mysqli_connect(HOST, USER, PASS, DB) or die ('Unable Connect');

if($db_connect){
	echo "Connection!";
}else{
	echo "Connection Failed!";
	exit();
}

header('Content-Type:application/json');
?>