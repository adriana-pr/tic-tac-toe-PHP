<?php
require_once("connection.php");

$postdata = file_get_contents("php://input");
if(isset($postdata) && !empty($postdata)){
    $request = json_decode($postdata);

    $img = $request->text;
    $name = $request->name;
    $number = $request->number;
    $mark = $request->mark;
    $nickname = $request->nickname;
    $email = $request->email;
    
    $sql = "INSERT INTO `users_leader_board`(`name`, `number_of_wins`, `mark`, `email`, `nickname`) 
    VALUES ('$name ',$number,'$mark','$email','$nickname')";
    
    $result = $connect->query($sql);
    if($mysqli->errno != 0) { 
        http_response_code(201);
    }
    
    $user = array("nickname"=>$nickname,"email"=>$email);
    echo json_encode($user);
}
?>