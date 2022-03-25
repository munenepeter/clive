<?php

namespace Clive\Controllers;

use Clive\Models\Policy;
use Clive\Models\Client;
use Clive\Models\Insurer;
use Clive\Core\Mantle\Paginator;

class PagesController {

    public function index() {
        if (auth()) {
            return view('dashboard', [
                'on_going' => count(Policy::where(['policy_status'], ['policy_status', 'On-going'])),
                'expired' => count(Policy::where(['policy_status'], ['policy_status', 'Expired'])),
                'allinsurers' => Insurer::all(), 
                'insurers' => Paginator::paginate(Insurer::all(),5),
                'allclients' => Client::all(), 
                'clients' => Paginator::paginate(Client::all(),5)
            ]);
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
            'allinsurers' => Insurer::all(), 
            'allpolicies' => Policy::all(), 
            'insurers' => Paginator::paginate(Insurer::all(),5),
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
