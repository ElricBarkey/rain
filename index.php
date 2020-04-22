<?php

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the auto load file
require_once ("vendor/autoload.php");

//instantiate the F3 Base class
$f3 = Base::instance();

//default route
$f3->route('GET /', function(){
    echo "<h1>its raining today</h1>";
});


//run f3
$f3->run();

