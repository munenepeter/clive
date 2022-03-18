<?php
//get routes
$router->get('', 'PagesController@index');
$router->get('index', 'PagesController@index');
$router->get('dashboard', 'PagesController@dashboard');
$router->get('login', 'PagesController@login');
$router->get('news', 'PagesController@news');
$router->get('users', 'PagesController@users');

$router->get('clients', 'ClientController@index');
//User
$router->get('adduser', 'UserController@adduser');
//Auth 
$router->get('profile', 'AuthController@profile');
$router->get('logout', 'AuthController@logout');


//Post requests
$router->post('login', 'AuthController@login');
$router->post('adduser', 'UserController@create');
