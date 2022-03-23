<?php

namespace Clive\Controllers;

use Clive\Models\User;
use Clive\Core\Mantle\Logger;
use Clive\Core\Mantle\Request;
use Clive\Core\Mantle\Paginator;


class InsurerController {

    public function index() {
        return view('insurers', [
            'allusers' => User::all(),
            'users' => Paginator::paginate(User::all(), 5)
        ]);
    }
    public function addinsurer() {
        //
        return view('addinsurer');
    }
    public function create() {
        if(isset($_POST)){
            array_push(Request::$errors, "Nothing was posted");

            Logger::log("ERROR: The form was not filled");
        }

        var_dump($_POST);
    die;
    }
    public function update() {
        //
    }
    public function delete() {
        //
    }
}
