<?php

namespace Clive\Controllers;

use Clive\Models\User;
use Clive\Core\Mantle\Logger;
use Clive\Core\Mantle\Request;
use Clive\Core\Mantle\Mail\Mail;
use Clive\Core\Mantle\Paginator;



class UserController {
    public function index() {  
        if (!auth()) {
            return redirect('login');
        }
        return view('users',[
            'allusers' => User::all(), 
            'users' => Paginator::paginate(User::all(),5)
        ]);
    }
    public function create() {

        //first_name, last_name, username, email, password, role

        $first_name = trim($_POST['first_name']);
        $last_name = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $pass = trim($_POST['password']);
        $username = trim($_POST['username']);
        $role = trim($_POST['role']);
        $created_at = date('Y-m-d H:i:s', time());
        $updated_at = date('Y-m-d H:i:s', time());

        Logger::log("INFO: $first_name,$last_name,$email, $pass, $username, $role");

        User::create([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'password' => md5($pass),
            'username' => $username,
            'role' => $role,
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ]);

        Mail::$subject = "Welcome to Clive {$username}";
        Mail::$to = $email;

        $mesage = <<<TEXT
        <h1>   Hi {$username}, Welcome to Clive</h1>
        <p>In order for you to continue please <a href="{$_SERVER['SERVER_NAME']}/login" target="_blank" rel="noopener noreferrer">log in</a> with
        </p>
        <br>
        <p>Username : {$email}</p>
        <p>Password : {$pass}</p>
        <br>
        <br>
        <p>And please don't forget to reset your password!</p>
        <br>
        <br>
        <p>Kind Regards,</p>
        <p>The Clive Team,</p>
        <p>www.clive.com</p>
        <hr>
        </hr>
        <p
            style="max-width:100%; text-align:center; font-family:Roboto; padding-bottom:10px; word-wrap: normal;; padding-top: 0px; font-size:10px">
            You are receiving this email because someone recently created a new Clive account. If this
            was not you, please ignore this email.
        </p>
TEXT;

        Mail::send($mesage);

        return redirect('/users');
    }
    //redirect to the add user page
    public function adduser() {
        if (!auth()) {
            return view('index');
        }
        return view('adduser');
    }
    public function update() {
        //
        if (!isset($_POST['first_name'])) {
            array_push(Request::$errors, "Nothing was posted");
            Logger::log("ERROR: The form was not filled");
            exit;
        }
        $first_name = trim($_POST['first_name']);
        $last_name = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $pass = trim($_POST['password']);
        $username = trim($_POST['username']);
        $role = trim($_POST['role']);
        $updated_at = date('Y-m-d H:i:s', time());
        $id = (int)trim($_POST['id']);

        User::update(
            "
            'first_name' = '$first_name',
            'last_name' = '$last_name',
            'email' = '$email',
            'password' = 'md5($pass)',
            'username' = '$username',
            'role' = '$role',
            'updated_at' = '$updated_at'
            ",
            'id',
            $id
        );
        Logger::log("INFO: {$username} has been Updated");
        return redirect('/users', ["msg" => "{$username} has been Updated"]);
    }
    public function delete() {
        if (!isset($_POST['id'])) {
            array_push(Request::$errors, "Nothing was posted");
            Logger::log("ERROR: The form was not filled");
            exit;
        }

        $id = (int)trim($_POST['id']);

        User::delete('id', $id);
        Logger::log("INFO: User has been Deleted");
        return redirect('/users', ["msg" => "User has been Deleted"]);
    }
}
