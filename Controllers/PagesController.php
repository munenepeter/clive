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
    
    
}
