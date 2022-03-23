<?php

namespace Clive\Controllers;



class DatabaseController {

    public function index(){
        if (!auth()) {
            return redirect('login');
        }
        return view('database');
    }
}