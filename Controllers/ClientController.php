<?php

namespace Clive\Controllers;


use Clive\Models\Client;
use Clive\Core\Mantle\Logger;
use Clive\Core\Mantle\Request;
use Clive\Core\Mantle\Paginator;


class ClientController {

    public function index() {
        return view('clients', [
            'allclients' => Client::all(),
            'clients' => Paginator::paginate(Client::all(), 5)
        ]);
    }
    public function create() {
        // var_dump($_POST);
        // die;
        //["names"] ["national_id"]["username"]["email"]["phone_number"]["address"]
        if (!isset($_POST)) {
            array_push(Request::$errors, "Nothing was posted");
            Logger::log("ERROR: The form was not filled");
            exit;
        }
        $names = trim($_POST['names']);
        $national_id = trim($_POST["national_id"]);
        $kra_pin = trim($_POST["kra_pin"]);
        $email = trim($_POST["email"]);
        $phone_number = trim($_POST["phone_number"]);
        $address = trim($_POST["address"]);
        $created_at = date('Y-m-d H:i:s', time());
        $updated_at = date('Y-m-d H:i:s', time());

        Client::create([
            'full_names' => $names,
            'email' => $email,
            'national_id' => $national_id,
            'kra_pin' => $kra_pin,
            'phone_number' => $phone_number,
            'home_address' => $address,
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ]);


        Logger::log("INFO: Created a Client {$names}");
        return redirect('/clients');
    }
    public function addclient() {
        //
        return view('addclient');
    }
    public function update() {
        //
        if (!isset($_POST)) {
            array_push(Request::$errors, "Nothing was posted");
            Logger::log("ERROR: The form was not filled");
            exit;
        }
        $names = trim($_POST['names']);
        $national_id = trim($_POST["national_id"]);
        $kra_pin = trim($_POST["kra_pin"]);
        $email = trim($_POST["email"]);
        $phone_number = trim($_POST["phone_number"]);
        $address = trim($_POST["home_address"]);
        $updated_at = date('Y-m-d H:i:s', time());
        $id = (int)trim($_POST['id']);

        Client::update(
            "'full_names' = '$names','email' = '$email','national_id' = '$national_id','kra_pin' = '$kra_pin', 'phone_number' = '$phone_number','home_address' = '$address','updated_at' = '$updated_at'",
            'id',
            $id
        );
        return redirect('/clients', ["msg" => "{$names} has been Updated"]);
    }
    public function delete() {
        if (!isset($_POST)) {
            array_push(Request::$errors, "Nothing was posted");
            Logger::log("ERROR: The form was not filled");
            exit;
        }

        $id = (int)trim($_POST['id']);

        Client::delete('id', $id);
        return redirect('/clients', ["msg" => "Client has been Deleted"]);
    }
}
