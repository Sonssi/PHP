<?php 
require "database/database.php";

$pdo = connectDB();

$allnews = getAllnews($pdo);


require "views/uutiset.view.php";

//cleanDump($allnews);