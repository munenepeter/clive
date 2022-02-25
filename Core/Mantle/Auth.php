<?php

namespace Clive\Core\Mantle;

use Clive\Core\Mantle\App;
use Clive\Core\Mantle\Request;
use Clive\Core\Mantle\Session;

class Auth {
    
    public static function login($email, $password) {

        $password = md5($password);
        $user = App::get('database')->selectWhere('users', ['password', 'email'], ['email', $email]);
        if (empty($user)) {
            array_push(Request::$errors, "There is no account with {$email} email");
            view('login', ['e' => Request::$errors]);
            return;
        }
        if ($password === $user[0]->password) {
            Session::make('loggedIn', true);
            //Todo Implement Session tokens  
            redirect('/');
        } else {
            array_push(Request::$errors, "Wrong credentials, Please try again!");
            view('login', ['e' => Request::$errors]);
            return;
        }
    }
}
