<?php

namespace Clive\Controllers;

use Clive\Core\Mantle\App;



class DatabaseController {

    public function index() {
        if (!auth()) {
            return redirect('/login');
        }
        if (!isAdmin()) {
            return redirect('/dashboard');
        }
        return view('database');
    }

    public function query() {

        $sql =  trim($_POST['query']);

        if (startsWith('Delete', $sql)) {

            $error = "Cannot run Delete statements for now!";
        } elseif (startsWith('delete', $sql)) {

            $error = "Cannot run Delete statements for now!";
        } elseif (startsWith('drop', $sql)) {

            $error = "Access Denied for Drop statements!";
        } elseif (startsWith('Drop', $sql)) {

            $error = "Access Denied for Drop statements!";
        } elseif (startsWith('insert', $sql)) {

            $error = "Access Denied for Insert statements!";
        }
        if ($error === '') {

            $results = App::get('database')->query($sql);

            return view('database', [
                'sql' => $sql,
                'results' => $results
            ]);
        } else {

            return view('database', [
                'sql' => $sql,
                'error' => $error
            ]);
        }
    }
}
