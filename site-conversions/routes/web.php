<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

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