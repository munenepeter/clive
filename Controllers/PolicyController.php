<?php

namespace Clive\Controllers;

use Clive\Models\Policy;
use Clive\Core\Mantle\Logger;
use Clive\Core\Mantle\Request;
use Clive\Core\Mantle\Paginator;


class PolicyController {

    public function index() {
        return view('policies', [
            'allusers' => Policy::all(),
            'users' => Paginator::paginate(Policy::all(), 5)
        ]);
    }
    public function create() {
        //

         var_dump($_POST);
         die;

        if (!isset($_POST)) {
            array_push(Request::$errors, "Nothing was posted");
            Logger::log("ERROR: The form was not filled");
            exit;
        }
        //  { ["name"]["email"] ["business_no"] }
        $policy_name = $_POST['policy_name'];
        $email = $_POST['email'];
        $business_no = $_POST['business_no'];
        $created_at = date('Y-m-d H:i:s', time());
        $updated_at = date('Y-m-d H:i:s', time());

        Policy::create([
            'name' => $policy_name,
            'email' => $email,
            'business_no' => $business_no,
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ]);
        Logger::log("INFO: Created a Policy {$policy_name}");
        return redirect('/policies');
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
