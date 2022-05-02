<?php

namespace Clive\Controllers;

use Clive\Models\Policy;
use Clive\Models\Client;
use Clive\Models\Insurer;
use Clive\Models\User;

class ReportController {
    public function index() {
        if (!auth()) {
            return view('login');
        }
        return view('reports', [
            'clients' => Client::all(),
            'insurers' => Insurer::all(),
            'policies' => Policy::all(),
            'users' => User::all()
        ]);
    }
}
