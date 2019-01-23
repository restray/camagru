<?php

error_reporting(0);

chdir('..');
require 'Core/Autoloader.php';
Autoloader::register();

use App\General\GeneralController;
use Core\Router;

$url = $_GET['path'];

$router = new Router();
$router->route("", "App\General\GeneralController@index");
$router->route("index.php", "App\General\GeneralController@index");
$ret = $router->execute($url);

if (!$ret) {
    header('HTTP/1.0 404 Not Found');
    echo "<h1 style='text-align:center;'>Error 404 - Page not found</h1>";
}
