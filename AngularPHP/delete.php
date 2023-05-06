<?php

require_once("connection.php");

$id = $_GET['id'];

$sql = "DELETE FROM `users_leader_board` WHERE `id` = $id " ;

$result = $connect->query($sql);

if($mysqli->errno != 0) { 
	http_response_code(204);
}

// error_reporting(E_ALL);
// ini_set('display_erors', 1);
?>