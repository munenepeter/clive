<?php
use App\Core\Router;
use App\Core\Request;

require 'Core/bootstrap.php';

 //Try to load the routes, direct the URI and check the request method
 try {
    Router::load('routes.php')->direct(Request::uri(), Request::method());
} catch (\Exception $e) {
    //throw $th;
    abort($e->getMessage(), $e->getCode());
}