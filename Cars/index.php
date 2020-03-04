<?php

define('APPLICATION', 'Application/');
require_once APPLICATION.'functions.php';


$configPath = 'config.json';
$page = @$_GET['page'] ? $_GET['page'] : 'home';

switch ( $page )
{
    case 'cars': require_once APPLICATION.'Core/cars.php'; break;
    case 'modifyCar': require_once APPLICATION.'Core/modifyCar.php'; break;
    case 'deleteCar': require_once APPLICATION.'Core/deleteCar.php'; break;  
}




require_once APPLICATION.'Templates/_layout.php';