<?php

namespace Clive\Controllers;

use Clive\Models\User;
use Clive\Core\Mantle\Logger;
use Clive\Core\Mantle\Request;
use Clive\Core\Mantle\Mail\Mail;
use Clive\Core\Mantle\Paginator;
use Clive\Core\Mantle\Mail\Template;



class UserController {
    public function index() {  
        if (!auth()) {
            return redirect('/login');
        }
        if (!isAdmin()) {
            return redirect('/dashboard');
        }
        return view('users',[
            'admins' => count(User::where(['role'], ['role', 'admin'])),
            'regular_users' => count(User::where(['role'], ['role', 'user'])),
            'allusers' => User::all(), 
            'users' => Paginator::paginate(User::all(),5)
        ]);
    }
    public function create() {

        //full_names, last_name, username, email, password, role
        if (!isAdmin()) {
            return redirect('/dashboard');
        }
        $full_names = trim($_POST['full_names']); 
        $email = trim($_POST['email']);
        $pass = trim($_POST['password']);
        $username = trim($_POST['username']);
        $role = trim($_POST['role']);
        $created_at = date('Y-m-d H:i:s', time());
        $updated_at = date('Y-m-d H:i:s', time());

        Logger::log("INFO: $full_names,$email, $pass, $username, $role");

        User::create([
            'full_names' => $full_names, 
            'email' => $email,
            'password' => md5($pass),
            'username' => $username,
            'role' => $role,
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ]);

        $personal = new Mail(Template::use('client-invoice', [
            'uname' => $username,
            'email'=> $email,
            'pass' => md5($pass)
        ]));

        $personal->subject = "Welcome to clive";
        $personal->to = $email;
        $personal->send();

      

        return redirect('/users');
    }
    //redirect to the add user page
    public function adduser() {
        if (!auth()) {
            return view('index');
        }
        if (!isAdmin()) {
            return redirect('/dashboard');
        }
        return view('adduser');
    }
    public function update() {
        //
        if (!isset($_POST)) {
            array_push(Request::$errors, "Nothing was posted");
            Logger::log("ERROR: The form was not filled");
            exit;
        }
        $full_names = trim($_POST['full_names']);
        $email = trim($_POST['email']);
        $pass = md5('1234');
        $username = trim($_POST['username']);
        $role = trim($_POST['role']);
        $updated_at = date('Y-m-d H:i:s', time());
        $id = (int)trim($_POST['id']);

        User::update(
            "
            'full_names' = '$full_names',
            'email' = '$email',
            'password' = '$pass',
            'username' = '$username',
            'role' = '$role',
            'updated_at' = '$updated_at'
            ",
            'user_id',
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

        User::delete('user_id', $id);
        Logger::log("INFO: User has been Deleted");
        return redirect('/users', ["msg" => "User has been Deleted"]);
    }
}
