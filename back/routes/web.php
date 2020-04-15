<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/foo', function () {
    return 'Hello World';
});

$router->get('/getusers', function () {
    $results = app('db')->select("SELECT * FROM societedhonneur");
    return $results;
});

$router->get('/getuser/{users}', function ($users) {
    $results = app('db')->select("SELECT * FROM societedhonneur where Prenom like '$users'");
    return $results;
});

