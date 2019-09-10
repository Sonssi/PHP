<?php 
set_include_path(dirname(__FILE__) . '/../');

require "router/Request.php";
require "router/Router.php";
require "database/database.php";
$router = new Router(new Requerst);


$router ->get('/', function(){
    $pdo = connectDB();
    require 'controllers/uutiset.php';
});

$router ->get('/uutiset', function(){
    $pdo = connectDB();
    require 'controllers/uutiset.php';
});



$router ->get('/uusi_uutinen', function(){
    $pdo = connectDB();
    require 'controllers/uusi_uutinen.view.php';
});

$router ->get('/uusi_uutinen', function(){
    $pdo = connectDB();
    require 'controllers/uusi_uutinen.php';
});

$router->get('/uusi_uutinen', function() {
    $pdo = connectDB();
    require 'controllers/register.php';
});


//require "views/index.view.php";