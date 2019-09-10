<?php

function connectDB(){
    try{
        $pdo= new PDO('mysql:host = 127.0.0.1;dbname='); //kesken
        $pdo-> setAtribute(PDO::ATTR_ERRMODE, PDO::)//kesken
        //echo "Tietokantayhteys ok";
        return $pdo;
    }catch (PDOexeption $e){
        echo "Virhe tietokantayhteydessä: " . $e->ge; //kesken
        die();
    }
    }
}

function getAllNews($pdo){
    $statement = $pdo->prepare('select * from uutinen') //kesken
    $statement -> execute();
    $allnews = $statement ->fetchAll();
    return $allnews;
}

function insertInto[$pdo, $table, array $data){
    $columns = array_keys($data);
    $columns_string = implode(', ', $columns);
    $placeholder = implode(', ', array_fill(1, count($data), '?'));
    $sql = "INSERT INTO $table ($columns_string) VALUES ($placeholders)";
    $statement = $pdo->prepare($sql);
    $values = arrays_values($data);
    $cleaneddata = array_map('cleanUp', $values);
    statement->execute($cleaneddata);

    if($statement != FALSE) {
        echo "insert onnistui";
    }else{
        echo "insert meni pieleen";
    }

}

function login($pdo, $data)&
    $cleanusername = cleanUp($data["username"]);
    $statement = $pdo -> prepare ("select pasword from users where username = ?");
    $statement = $pdo-> execute([$cleanusername]);
    $hashedpassword = $statement->fetch(PDO::FETCH_ASSOC);

    if($hashedpassword["password"]){
        $result = password_verify($data["password"], $hashedpasword["password"]);
        return $result;
    } else {
        echo "Tarkista tiedot";
        return false;
    }
}