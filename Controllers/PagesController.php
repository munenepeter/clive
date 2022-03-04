<?php

namespace Clive\Controllers;

use Clive\Core\Mantle\App;
use Clive\Core\Mantle\Session;

class PagesController {

    public function index() {
        if (auth()) {
            return view('dashboard');
        }
        return view('index');
    }
    public function dashboard() {
        if (!auth()) {
            return view('index');
        }
        return view('dashboard');
    }
    public function login() {
        if (auth()) {
            return view('index');
        }
        return view('login');
    }
    public function profile() {
        if (!auth()) {
            return view('login');
        }

        $user = App::get('database')->selectWhere(
            'users',
            ['first_name', 'last_name', 'email', 'username', 'password', 'email'],
            ['username', Session::get('user')]
        );

        return view('profile', ['user' => $user]);
    }
}
