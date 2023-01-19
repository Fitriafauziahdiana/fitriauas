<?php

require_once('db.php');

$todo = $_POST['todo'];

$query = "INSERT INTO list(todo) VALUES ('$todo')";
$sql = mysqli_query($db_connect, $query);

if($sql){
	echo json_encode(array('message' => 'data ditambah'));		
}else{
	echo json_encode(array('message' => 'data tidak ditambah'));
}

?>