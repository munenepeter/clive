<?php

namespace Clive\Controllers;

use Clive\Models\Insurer;
use Clive\Core\Mantle\Logger;
use Clive\Core\Mantle\Request;
use Clive\Core\Mantle\Paginator;


class InsurerController {

    public function index() {
        return view('insurers', [
            'allinsurers' => Insurer::all(),
            'insurers' => Paginator::paginate(Insurer::all(), 5)
        ]);
    }
    public function addinsurer() {
      
        return view('addinsurer');
    }
    public function create() {
        if (!isset($_POST)) {
            array_push(Request::$errors, "Nothing was posted");
            Logger::log("ERROR: The form was not filled");
            exit;
        }
        //  { ["name"]["email"] ["business_no"] }
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $business_no = trim($_POST['business_no']);
        $created_at = date('Y-m-d H:i:s', time());
        $updated_at = date('Y-m-d H:i:s', time());

        Insurer::create([
            'name' => $name,
            'email' => $email,
            'business_no' => $business_no,
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ]);
        Logger::log("INFO: Created an Insurer {$name}");
        return redirect('/insurers', ["msg" => "Insurer has been Created"]);
    }

    public function update() {
        if (!isset($_POST)) {
            array_push(Request::$errors, "Nothing was posted");
            Logger::log("ERROR: The form was not filled");
            exit;
        }
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $business_no = trim($_POST['business_no']);
        $updated_at = date('Y-m-d H:i:s', time());
        $id = (int)trim($_POST['id']);

        Insurer::update(
            "'name' = '$name','email' = '$email','business_no' = '$business_no','updated_at' = '$updated_at'",
            'id',
            $id
        );
        return redirect('/insurers', ["msg" => "Insurer has been Updated"]);
    }
    public function delete() {
        if (!isset($_POST)) {
            array_push(Request::$errors, "Nothing was posted");
            Logger::log("ERROR: The form was not filled");
            exit;
        }

        $id = (int)trim($_POST['id']);

        Insurer::delete('id', $id);
        return redirect('/insurers', ["msg" => "Insurer has been Deleted"]);
    }
}
