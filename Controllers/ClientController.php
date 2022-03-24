<?php

namespace Clive\Controllers;


use Clive\Models\Client;
use Clive\Core\Mantle\Logger;
use Clive\Core\Mantle\Request;
use Clive\Core\Mantle\Paginator;


class ClientController {

    public function index() {
        return view('clients', [
            'allusers' => Client::all(),
            'users' => Paginator::paginate(Client::all(), 5)
        ]);
    }
    public function create() {
        var_dump($_POST);
        die;
        //["names"] ["national_id"]["username"]["email"]["phone_number"]["address"]
        if (!isset($_POST)) {
            array_push(Request::$errors, "Nothing was posted");
            Logger::log("ERROR: The form was not filled");
            exit;
        }
        $names = $_POST['names'];
        $national_id = $_POST["national_id"];
        $kra_pin = $_POST["kra_pin"];
        $email = $_POST["email"];
        $phone_number = $_POST["phone_number"];
        $address = $_POST["address"];
        $created_at = date('Y-m-d H:i:s', time());
        $updated_at = date('Y-m-d H:i:s', time());

        Client::create([
            'names' => $names,
            'national_id' => $national_id,
            'kra_pin' => $kra_pin,
            'email' => $email,
            'phone_number' => $phone_number,
            'address' => $address,
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ]);


        Logger::log("INFO: Created a Policy {$names}");
        return redirect('/policies');
    }
    public function addclient() {
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
