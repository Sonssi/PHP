<?php

require_once "database/database.php";
$pdo = connectDB();

if(isset($_POST['lastname'], $_POST['firstname'], $_POST['username'], $_POST['pasword'])){
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashedpdwd = password_hash($password, PASSWORD_DEFAULT);

    try{
        insertInto(
            $pdo,
            'users',
            [   "lastname" => $lastname,
                "firstname" => $firstname,
                "username" => $username,
                "password" => $hashedpswd]);
    }catch (PDOExeption $e){
        echo "Virhetilanne: ". $e->getMessage();
        die();
    }

}

require "views/register.view.php";