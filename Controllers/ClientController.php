<?php

namespace Clive\Controllers;

use Clive\Models\User;
use Clive\Core\Mantle\Paginator;


class ClientController {

    public function index() {
        return view('clients', [
            'allusers' => User::all(),
            'users' => Paginator::paginate(User::all(), 5)
        ]);
    }
    public function create() {
        //
        return view('addclient');
    }
    public function update() {
        //
    }
    public function delete() {
        //
    }
}
