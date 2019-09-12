<?php 
set_include_path(dirname(__FILE__) . '/../');

require "router/Request.php";
require "router/Router.php";
require "libraries/Helpers.php";

$router = new Router(new Request);


$router ->get('/', function(){
   
    require 'controllers/uutiset.php';
});

$router ->get('/uutiset', function(){
    
    require 'controllers/uutiset.php';
});



$router ->get('/uusi_uutinen', function(){
    if(isLogged()){
     require 'controllers/uusi_uutinen.php';
    }else{
        require 'controllers/login.php';
    }

});

$router ->post('/uusi_uutinen', function(){
    
    require 'controllers/uusi_uutinen.php';
});



$router-> get('/register', function(){
    require 'controllers/register.php';
});


$router-> post('/register', function(){
    require 'controllers/register.php';
});

$router->get('/login', function() {
    
    require 'controllers/login.php';
});

$router-> post('/login', function(){
    require 'controllers/login.php';
});


//require "views/index.view.php";