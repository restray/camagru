<?php

require 'Core/Autoloader.php';
Autoloader::register();

$str = str_replace('index.php', '', $_SERVER[SCRIPT_NAME]);
$url = str_replace($str, '', $_SERVER[REQUEST_URI]);
$tmp = array_filter(explode('/', $url));
$parsed = [];
foreach ($tmp as $elem) {
    $parsed[] = $elem;
}
print_r($parsed);
