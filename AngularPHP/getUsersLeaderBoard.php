<?php
require_once("connection.php");
$users = [];
$sql = "SELECT * FROM `users_leader_board`" ;
$result = $connect->query($sql);
if($mysqli->errno != 0) { 
	die($mysqli->error);
}
$index=0;
while($row = $result->fetch_assoc( )){
    $users[$index]['id']=$row['id'];
    $users[$index]['img']=$row['img'];
    $users[$index]['name']=$row['name'];
    $users[$index]['number']=$row['number_of_wins'];
    $users[$index]['mark']=$row['mark'];
    $users[$index]['nickname']=$row['nickname'];
    $users[$index]['email']=$row['email'];
    $index++;
}
echo json_encode($users);
// error_reporting(E_ALL);
// ini_set('display_erors', 1);
?>