<?php
function cleanDump($data){
    echo "<pre>";
    var_dump($data);
    echo "<pre>";
}

function cleanUp($userinput){
    $input = trim($userinput);
    $cleaninput = htmlspecialchars($input);
    return $cleaninput;
}
 function IsLogged(){
     if(isset($_SESSION['username']) && $_SESSION['session_id'] === session_id()){
         return true;     
     } else {
         false;
     }
 }