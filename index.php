<?php
require_once __DIR__.'/vendor/autoload.php'; 

$app = new Silex\Application(); 
//mostra o hello name 
$app->get('/hello/{name}', function($name) use($app) { 
    return 'Hello '.$app->escape($name); 
}); 

$app->run(); 