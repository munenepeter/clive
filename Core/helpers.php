<?php

use Clive\Core\Mantle\Session;

/**
 * View
 * 
 * Loads a specified file along with its data
 * 
 * @param String $filename Page to displayed
 * @param Array $data Data to be passed along
 * 
 * @return File view
 */
function view($filename, $data = []) {
    extract($data);
    return require "views/{$filename}.view.php";
}
/**
 * Redirect
 * 
 * Redirects to a give page
 * 
 * @param String $path Page to be redirected to
 */
function redirect(string $path) {
    header("location:{$path}");
}
/**
 * Abort
 * 
 * Kills the execution of the script & diplays error page
 * 
 * @param String $message The exception/erro msg
 * @param Int $code Status code passed with the exception
 * 
 * @return File view
 */
function abort($message, $code) {

    //   http_response_code($code);

    view('error', [
        'code' => $code,
        'message' => $message
    ]);
    exit;
}
/**
 * Auth Helper
 * 
 * Returns true of false incase one is loggedin
 * 
 * @return Bool Session
 */
function auth() {

    if (Session::get('loggedIn') === NULL || Session::get('loggedIn') === false) {
        return false;
    }
    return Session::get('loggedIn');
}
/**
 * Guest Helper
 * 
 * Opposite of Auth
 * 
 * @return Bool Session
 */
function guest() {
    if (auth()) {
        return false;
    }
}

/*
    function auth() {
        $a = true;

        $class = new class {
            public $name = "Peter" ;

            public function name() {
              echo $this->name;
            }
        };

        if ($a) {
            return $class;
        }
        return $a;
    }

    auth()->name();
*/
