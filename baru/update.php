<?php

require_once('db.php');
parse_str(file_get_contents('php://input'), $values);

$id = $values['id'];
$todo = $values['todo'];

$query = "UPDATE list SET todo='$todo' WHERE id='$id' ";
$sql = mysqli_query($db_connect, $query);

if($sql){
	echo json_encode(array('message' => 'data diupdate!'));		
}else{
	echo json_encode(array('message' => 'data tidak diupdate!'));
}

?>