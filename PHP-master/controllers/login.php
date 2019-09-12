<?php


require_once "databaase/database.php";
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
        require "view/uusi_uutinen.view.php";
    }else{
        echo "Tarkist tiedot";
        require "view/login.view.php";
    } 
}else {
    require "view/login.view.php"       

}

