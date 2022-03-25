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

$router->get('database', 'DatabaseController@index');
//Insurers
$router->get('insurers', 'InsurerController@index');
$router->get('insurers/create', 'InsurerController@addinsurer');
$router->post('insurers/create', 'InsurerController@create');
$router->post('insurers/update', 'InsurerController@update');
$router->post('insurers/delete', 'InsurerController@delete');

//Clients
$router->get('clients', 'ClientController@index');
$router->get('clients/create', 'ClientController@addclient');
$router->post('clients/create', 'ClientController@create');
$router->post('clients/update', 'ClientController@update');
$router->post('clients/delete', 'ClientController@delete');
//policies
$router->get('policies', 'PolicyController@index');
$router->get('policies/create', 'PolicyController@addpolicy');
$router->post('policies/create', 'PolicyController@create');
$router->post('policies/update', 'PolicyController@update');
$router->post('policies/delete', 'PolicyController@delete');
//User
$router->get('users', 'UserController@index');
$router->get('users/adduser', 'UserController@adduser');
$router->post('users/update', 'UserController@update');
$router->post('users/delete', 'UserController@delete');
//Auth 
$router->get('profile', 'AuthController@profile');
$router->get('system_log', 'PagesController@log');
$router->get('logout', 'AuthController@logout');


//Post requests
$router->post('login', 'AuthController@login');
$router->post('users/adduser', 'UserController@create');
