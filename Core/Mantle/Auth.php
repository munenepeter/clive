<?php

namespace Clive\Core\Mantle;

use Clive\Core\Mantle\App;
use Clive\Core\Mantle\Request;
use Clive\Core\Mantle\Session;

class Auth {
    
    public static function login($email, $password) {

        $password = md5($password);

        $user = App::get('database')->selectWhere('users', ['username','password', 'email'], ['email', $email]);

        if (empty($user)) {

            array_push(Request::$errors, "There is no account with {$email} email");

            Logger::log("ERROR: Tried to login with {$email} email");

            view('login', ['e' => Request::$errors]);
            return;

        }
        if ($password === $user[0]->password) {

            Session::make('loggedIn', true);
            Session::make('user', $user[0]->username);
            //Todo Implement Session tokens  
            redirect('/');
            Logger::log("INFO: Logged in " . $user[0]->username . " at " . date("D, d M Y H:i:s"));
        } else {

            array_push(Request::$errors, "Wrong credentials, Please try again!");

            Logger::log("ERROR: Wrong credentials for {$email}, $password");
            
            view('login', ['e' => Request::$errors]);
            
            return;
        }
    }
    public static function logout($user){

        Session::unset($user);
        Session::make('loggedIn', false);
        Session::destroy();
        Logger::log("INFO: Logged out " . $user . " at " . date("D, d M Y H:i:s"));
    }
}
