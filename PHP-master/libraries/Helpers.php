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
