<?php

namespace Clive\Controllers;

use Clive\Models\Policy;
use Clive\Core\Mantle\Logger;
use Clive\Core\Mantle\Request;
use Clive\Core\Mantle\Paginator;


class PolicyController {

    public function index() {
        return view('policies', [
            'on_going' => count(Policy::where(['policy_status'], ['policy_status','On-going'])),
            'expired' => count(Policy::where(['policy_status'], ['policy_status','Expired'])),
            'allpolicies' => Policy::all(),
            'policies' => Paginator::paginate(Policy::all(), 5)
        ]);
    }
    public function create() {

        if (!isset($_POST)) {
            array_push(Request::$errors, "Nothing was posted");
            Logger::log("ERROR: The form was not filled");
            exit;
        }
        // ["policy_no"]["policy_type"]["policy_price"]["policy_status"]["insurer"]["client_nat_id"]
        $policy_no = $_POST['policy_no'];
        $policy_type = $_POST["policy_type"];
        $policy_price = $_POST["policy_price"];
        $policy_status = $_POST["policy_status"];
        $insurer = $_POST["insurer"];
        $client_nat_id = $_POST["client_nat_id"];
        $created_at = date('Y-m-d H:i:s', time());
        $updated_at = date('Y-m-d H:i:s', time());

        Policy::create([
            'policy_no' => $policy_no,
            'policy_type' => $policy_type,
            'policy_price' => $policy_price,
            'policy_status' => $policy_status,
            'insurer' => $insurer,
            'client_nat_id' => $client_nat_id,
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ]);
       
       
        Logger::log("INFO: Created a Policy {$policy_no}");
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
