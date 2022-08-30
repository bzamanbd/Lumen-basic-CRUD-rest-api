<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->get('/details', 'DetailsController@selectDetails');
$router->post('/details', 'DetailsController@createDetails');
$router->put('/details', 'DetailsController@editeDetails');
$router->delete('/details', 'DetailsController@deleteDetails');