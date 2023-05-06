<?php
header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Origin: https://adriana-pr.github.io');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE');
header('Access-Control-Allow-Headers: Content-Type');


function connect(){
    $mysqli = new mysqli("localhost", "root", "root", "game_database");
	if ($mysqli->connect_errno != 0) 
	{ 
		die($mysqli->connect_error);
	}
    return $mysqli;
}
$connect = connect();
?>
