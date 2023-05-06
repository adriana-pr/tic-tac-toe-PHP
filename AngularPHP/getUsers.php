<?php

require_once("connection.php");
$users = [];
$sql = "SELECT * FROM users" ;
$result = $connect->query($sql);
if($mysqli->errno != 0) { 
	die($mysqli->error);
}
$index=0;
while($row = $result->fetch_assoc( )){
    $users[$index]['id']=$row['id'];
    $users[$index]['nickname']=$row['nickname'];
    $users[$index]['email']=$row['email'];
    $users[$index]['password']=$row['password'];
    $index++;
}
echo json_encode($users);

// error_reporting(E_ALL);
// ini_set('display_erors', 1);
?>