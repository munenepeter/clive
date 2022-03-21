<?php

namespace Clive\Controllers;

use Clive\Models\User;
use Clive\Core\Mantle\Paginator;

class PagesController {

    public function index() {
        if (auth()) {
            return view('dashboard', ['users' => User::all()]);
        }
        return view('index');
    }
    public function news() {      
        return view('news');
    }
    public function users() {  
        if (!auth()) {
            return view('login');
        }
        return view('users',[
            'allusers' => User::all(), 
            'users' => Paginator::paginate(User::all(),5)
        ]);
    }
    public function dashboard() {
        if (!auth()) {
            return view('login');
        }
        return view('dashboard', [
            'allusers' => User::all(), 
            'users' => Paginator::paginate(User::all(),5)
        ]);
    }
    public function login() {
        if (auth()) {
            return view('index');
        }
        return view('login');
    }
    
    
}
