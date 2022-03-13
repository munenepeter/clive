<?php

namespace Clive\Controllers;

use Clive\Models\User;
use Clive\Core\Mantle\Session;

class PagesController {

    public function index() {
        if (auth()) {
            return view('dashboard', ['users' => User::all()]);
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
        
        $user =  User::where(
          ['first_name', 'last_name', 'email', 'username', 'password', 'email'],
          ['username', Session::get('user')]);

      

        return view('profile', ['user' => $user]);
    }
     public function adduser() {
        if (!auth()) {
            return view('index');
        }
            $user =  User::where(
            ['first_name', 'last_name', 'email', 'username', 'password', 'email'],
            ['username', Session::get('user')]);

        return view('adduser', ['user' => $user]);
    }
}
