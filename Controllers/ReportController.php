<?php

namespace Clive\Controllers;

class ReportController{
    public function index() {
        if (!auth()) {
            return view('login');
        }
        return view('reports');
    }
}