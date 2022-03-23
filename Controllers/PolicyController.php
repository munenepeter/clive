<?php

namespace Clive\Controllers;

use Clive\Models\User;
use Clive\Core\Mantle\Paginator;


class PolicyController {

    public function index() {
        return view('policies', [
            'allusers' => User::all(),
            'users' => Paginator::paginate(User::all(), 5)
        ]);
    }
    public function create() {
        //
        return view('addpolicy');
    }
    public function update() {
        //
    }
    public function delete() {
        //
    }
}
