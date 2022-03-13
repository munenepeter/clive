<?php
//get routes
$router->get('', 'PagesController@index');
$router->get('index', 'PagesController@index');
$router->get('dashboard', 'PagesController@dashboard');
$router->get('login', 'PagesController@login');
$router->get('profile', 'PagesController@profile');
$router->get('profile', 'PagesController@profile');
$router->get('adduser', 'PagesController@adduser');
$router->get('logout', 'AuthController@logout');




$router->post('adduser', 'UserController@create');
