<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
    echo "<center><h1>Nothing to see here.</h1></center>";
    return $router->app->version();
});

Route::group([

    'prefix' => 'api'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('user-profile', 'AuthController@me');
    Route::post('create', 'userController@register');

    Route::get('hello', 'userController@hello');
});

$router->group(['prefix' => 'api/v1'], function($router) {
    $router->post('/payment', 'paymongoController@pay');
 //Converting Temperature
$router->post('/celsius-to-fahrenheit', 'TemperatureController@celsiusToFahrenheit');
$router->post('/fahrenheit-to-celsius', 'TemperatureController@fahrenheitToCelsius');

//Converting Speed
$router->post('/miles-to-kilometers', 'SpeedController@milesToKilometers');
$router->post('/kilometers-to-miles', 'SpeedController@kilometersToMiles');

// ROUTES FOR LENGTH

$router->post('/inches-to-centimeters', 'LengthController@inchesToCentimeters');
$router->post('/centimeters-to-inches', 'LengthController@centimetersToInches');

$router->post('/feet-to-meters', 'LengthController@feetToMeters');
$router->post('/meters-to-feet', 'LengthController@metersToFeet');

$router->post('/miles-to-kilometers', 'LengthController@milesToKilometers');
$router->post('/kilometers-to-miles', 'LengthController@kilometersToMiles');
});




