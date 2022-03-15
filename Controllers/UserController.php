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

        Mail::$subject = "Welcome to Clive @{$username}";
        Mail::$to = $email;

        $mesage = <<<TEXT
        <h1>Welcome to Clive @{$username}, </h1>
        <p>In order for you to continue please <a href="{$_SERVER['SERVER_NAME']}/login" target="_blank" rel="noopener noreferrer">log in</a> with
        </p>
        <br>
        <p>Username : {$username}</p>
        <p>Password : {$pass}</p>
        <br>
        <br>
        <p>And please don't forget to reset your password!</p>
        <br>
        <br>
        <p>Kind Regards,</p>
        <p>The Clive Team,</p>
        <p>www.clive.com</p>
TEXT;

        Mail::send($mesage);

        return redirect('users');
    }
    //redirect to the add user page
    public function adduser() {
        if (!auth()) {
            return view('index');
        }
        return view('adduser');
    }
}
