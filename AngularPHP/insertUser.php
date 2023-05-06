<?php

require_once("connection.php");

$postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata)){
    $request = json_decode($postdata);
    $nickname = $request->name;
    $email = $request->email;
    $password = password_hash($request->password, PASSWORD_BCRYPT);
    
    $sql = "INSERT INTO `users`(`nickname`, `email`, `password`)
    VALUES ('$nickname','$email','$password')";
    
    $result = $connect->query($sql);
    if($mysqli->errno != 0) { 
        http_response_code(201);
    }

    $user = array("nickname"=>$nickname,"email"=>$email);
    echo json_encode($user);
    
}

?>