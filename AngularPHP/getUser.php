<?php

require_once("connection.php");

$postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata)){
    $request = json_decode($postdata);
    
    $email = $request->email;
    $password = $request->password;

    $sql = "SELECT * FROM `users` WHERE `email` = '$email' ";
    $result = $connect->query($sql)->fetch_assoc( );
    $user['nickname'] = $result['nickname'];
    $user['email'] = $result['email'];

   if($mysqli->errno != 0) { 
		die($mysqli->error);
	}
    
    if ($result && password_verify($password , $result["password"])){
        $data = array("message"=>"success");
        echo json_encode($user);
    }
    else{
       $data = array("message"=>"error");
       echo json_encode($data);
    }
}

?>