<?php

namespace Clive\Controllers;


use Clive\Models\Client;
use Clive\Models\Policy;
use Clive\Models\Insurer; 
use Clive\Core\Mantle\Mail\Mail;
use Clive\Core\Mantle\Mail\Template; 

class PagesController {

    public function index() {
        if (auth()) {
            return view('dashboard', [
                'on_going' => count(Policy::where(['policy_status'], ['policy_status', 'On-going'])),
                'expired' => count(Policy::where(['policy_status'], ['policy_status', 'Expired'])),
                'clients' => Client::all(),
                'insurers' => Insurer::all()
               
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
            'policies' => Policy::all(), 
            'clients' => Client::all(),
            'insurers' => Insurer::all()
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
   
    public function email() {
        // $personal = new Mail(Template::use('client-invoice', ['uname' => 'peter', 'email'=>'email@2.com', 'pass' => 1234]));

        // $personal->subject = "A test";
        // $personal->to = "new@new.com";
        // $personal->send();

        // echo Template::use('client-invoice', ['uname' => 'peter', 'email'=>'email@2.com', 'pass' => 1234]);
    }
    
    
}
