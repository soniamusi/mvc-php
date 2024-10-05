<?php

require __DIR__ . '/vendor/autoload.php';

use App\Http\Router;
use \App\Controller\Pages\Home;

define('URL', 'http://localhost:81/mvc-php');

$obRouter = new Router('URL');
echo "<br>";
print_r($obRouter);
echo "<br>";

echo Home::getHome();
