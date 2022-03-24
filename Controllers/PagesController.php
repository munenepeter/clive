<?php

namespace Clive\Controllers;

use Clive\Models\Client;
use Clive\Models\Insurer;
use Clive\Core\Mantle\Paginator;

class PagesController {

    public function index() {
        if (auth()) {
            return view('dashboard', ['users' => Client::all()]);
        }
        return view('index');
    }
    public function news() {      
        return view('news');
    }
   
    public function dashboard() {
        if (!auth()) {
            return redirect('login');
        }
        return view('dashboard', [
            'allusers' => Insurer::all(), 
            'users' => Paginator::paginate(Insurer::all(),5),
            'allclients' => Client::all(), 
            'clients' => Paginator::paginate(Client::all(),5)
        ]);
    }
    public function login() {
        if (auth()) {
            return view('index');
        }
        return view('login');
    }
    public function log() {
        if (!auth()) {
            return view('login');
        }
        return view('logs');
    }
    
    
}
