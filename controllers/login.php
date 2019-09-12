<?php
require_once "database/database.php";
$pdo = connectDB();


if(isset($_POST['username'], $_POST['password'])){
    $username = $_POST['username'];
    $username = $_POST['password'];

    $result = login($pdo,
        [
            "username" => $username,
            "password" => $password
        ]);
    
    if($result){
        echo "Tervetuloa";
        $_SESSION["username"]=$username;
        $_SESSION["session_id"] = session_id();

        hader("Location: /"); // forward eli uudelleenohjaus
      
    }else{
        echo "Tarkist tiedot";
        require "view/login.view.php";
    } 
}else {
    require "view/login.view.php" ;
}      


