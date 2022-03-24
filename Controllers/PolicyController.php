<?php

namespace Clive\Controllers;

use Clive\Models\User;
use Clive\Core\Mantle\Logger;
use Clive\Core\Mantle\Request;
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



        if (!isset($_POST)) {
            array_push(Request::$errors, "Nothing was posted");
            Logger::log("ERROR: The form was not filled");
            exit;
        }
        //  { ["name"]["email"] ["business_no"] }
        $name = $_POST['name'];
        $email = $_POST['email'];
        $business_no = $_POST['business_no'];
        $created_at = date('Y-m-d H:i:s', time());
        $updated_at = date('Y-m-d H:i:s', time());

        Policy::create([
            'name' => $name,
            'email' => $email,
            'business_no' => $business_no,
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ]);
        Logger::log("INFO: Created an Insurer {$name}");
        return redirect('/insurers');
    }
    public function addpolicy() {
        return view('addpolicy');
    }

    public function update() {
        //
    }
    public function delete() {
        //
    }
}
