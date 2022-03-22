<?php

include 'tests.php';

Router::load('routes.php')->direct("", "GET");

Router::group('auth', function () use ($router) {

    $router->get('', 'TestsController@index');
});