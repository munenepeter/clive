<?php
require 'Core/Request.php';
require 'Core/Router.php';

require 'controllers/PagesController.php';

function view($filename, $data = []){
    extract($data);
    return require "views/{$filename}.view.php";
}

function redirect(string $path){
    header("location:{$path}");
}
function abort($message, $code = 0){

    http_response_code($code);

    view('error', [
        'code' => $code,
        'message' => $message
    ]);
}