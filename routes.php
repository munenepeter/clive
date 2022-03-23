<?php


//get routes

// $router->get('', function(){
//    echo "Call backs didn't work!!";
// });

$router->get('', 'PagesController@index');
$router->get('index', 'PagesController@index');
$router->get('dashboard', 'PagesController@dashboard');
$router->get('login', 'PagesController@login');
$router->get('news', 'PagesController@news');
$router->get('users', 'PagesController@users');
$router->get('database', 'DatabaseController@index');

$router->get('clients', 'ClientController@index');
$router->get('clients/create', 'ClientController@create');
//User
$router->get('users/adduser', 'UserController@adduser');
//Auth 
$router->get('profile', 'AuthController@profile');
$router->get('system_logs', 'PagesController@log');
$router->get('logout', 'AuthController@logout');


//Post requests
$router->post('login', 'AuthController@login');
$router->post('users/adduser', 'UserController@create');
