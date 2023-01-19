<?php

require_once('db.php');
parse_str(file_get_contents('php://input'), $values);

$id = $values['id'];

$query = "DELETE FROM list WHERE id='$id' ";
$sql = mysqli_query($db_connect, $query);

if($sql){
	echo json_encode(array('message' => 'data dihapus!'));		
}else{
	echo json_encode(array('message' => 'data tidak dihapus!'));
}

?>