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
    public function policies() {
        if (!auth()) {
            return view('login');
        }
        $insurers = [
            "APA INSURANCE COMPANY",
            "BRITAM GENERAL INSURANCE",
            "GATEWAY INSURANCE COMPANY",
            "GA INSURANCE COMPANY",
            "FIRST ASSURANCE COMPANY",
            "DIRECTLINE ASSURANCE COMPANY",
            "MONARCH INSURANCE COMPANY",
            "KENYA ORIENT INSURANCE",
            "CANNON ASSURANCE COMPANY",
            "CIC GENERAL INSURANCE COMPANY"
        ];
        return view('policy-report', [
            'policies' => Policy::all(),
            'insurers' => $insurers
        ]);
    }
    public function clients() {
        if (!auth()) {
            return view('login');
        }
        return view('client-reports', [
            'clients' => Client::all()
        ]);
    }
    public function insurers() {
        if (!auth()) {
            return view('login');
        }
        return view('insurer-reports', [
            'insurers' => Insurer::all()
        ]);
    }
    public function users() {
        if (!auth()) {
            return view('login');
        }
        return view('user-reports', [
            'admins' => count(User::where(['role'], ['role', 'admin'])),
            'regular_users' => count(User::where(['role'], ['role', 'user'])),
            'users' => User::all()
        ]);
    }
}
