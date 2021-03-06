<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use phpDocumentor\Reflection\Types\String_;

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

// $router->get('/key', function() use ($router){
//     return \Illuminate\Support\Str::random(32);
// });

$router->post('http://isleep.innobyte.pe/api/v1/device/sync/store', [
    'as' => 'device', 'uses' => 'DeviceController@index'
]);
