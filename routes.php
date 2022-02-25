<?php
//get routes
$router->get('', 'PagesController@index');
$router->get('index', 'PagesController@index');
$router->get('login', 'PagesController@login');
$router->post('login', 'AuthController@login');