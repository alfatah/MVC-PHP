<?php

// if (isset($_SERVER['PATH_INFO'])) {
//     echo $_SERVER['PATH_INFO'];
// }else{
//     echo "TIDAK ADA PATH_INFO";
// }

// Path Info
// localhost/Latihan/MVC%20PHP/public/index.php/product/123/categories

// $path = '/index';

// if(isset($_SERVER['PATH_INFO'])) {
//     $path = $_SERVER['PATH_INFO'];
// }

// require_once __DIR__ . '/../app/view' . $path . '.php';

// localhost/Latihan/MVC%20PHP/public/index.php/register
// localhost/Latihan/MVC%20PHP/public/index.php/login
// localhost/Latihan/MVC%20PHP/public/

require_once __DIR__ . '/../vendor/autoload.php';

use Belajar\MvcPhp\App\Router;
use Belajar\MvcPhp\Controller\HomeController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');
Router::add('GET', '/about', HomeController::class, 'about');

Router::run();  

// $className = "Belajar\MvcPhp\Controller\HomeController";
// $functionName = "world";

// $controller = new $className;
// $controller->$functionName();

// localhost/Latihan/MVC%20PHP/public/index.php/hello

// localhost/Latihan/MVC%20PHP/public/index.php/register
// localhost/Latihan/MVC%20PHP/public/index.php/login
// localhost/Latihan/MVC%20PHP/public/
