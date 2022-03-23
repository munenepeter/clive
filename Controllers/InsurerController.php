<?php

namespace Clive\Controllers;

use Clive\Models\User;
use Clive\Core\Mantle\Paginator;


class InsurerController {

    public function index() {
        return view('insurers', [
            'allusers' => User::all(),
            'users' => Paginator::paginate(User::all(), 5)
        ]);
    }
    public function create() {
        //
        return view('addinsurer');
    }
    public function update() {
        //
    }
    public function delete() {
        //
    }
}
