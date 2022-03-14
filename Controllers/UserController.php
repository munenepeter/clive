<?php

namespace Clive\Controllers;

use Clive\Models\User;
use Clive\Core\Mantle\Mail;
use Clive\Core\Mantle\Logger;
use Clive\Core\Mantle\Request;
use Clive\Core\Mantle\Session;


class UserController {

    public function create() {

        //first_name, last_name, username, email, password, role

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $username = $_POST['username'];
        $role = $_POST['role'];

        Logger::log("INFO: $first_name,$last_name,$email, $pass, $username, $role");

        User::create([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'password' => $pass,
            'username' => $username,
            'role' => $role
        ]);

        Mail::$subject = "A test";
        Mail::$to = $email;
        Mail::send("Welcome to Clive");

        return view('users', ['users' => User::all()]);
    }
    public function adduser() {
        if (!auth()) {
            return view('index');
        }
        return view('adduser');
    }
}
