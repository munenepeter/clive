<?php

namespace Clive\Controllers;

use Clive\Models\Policy;
use Clive\Core\Mantle\Logger;
use Clive\Core\Mantle\Request;
use Clive\Core\Mantle\Paginator;


class PolicyController {

    public function index() {
        return view('policies', [
            'on_going' => count(Policy::where(['policy_status'], ['policy_status', 'On-going'])),
            'expired' => count(Policy::where(['policy_status'], ['policy_status', 'Expired'])),
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
        $policy_no = trim($_POST['policy_no']);
        $policy_type = trim($_POST["policy_type"]);
        $policy_price = trim($_POST["policy_price"]);
        $policy_status = trim($_POST["policy_status"]);
        $insurer = trim($_POST["insurer"]);
        $client_nat_id = trim($_POST["client_nat_id"]);
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
        $insurers = [   
            "APA INSURANCE COMPANY",    
            "BRITAM GENERAL INSURANCE",     
            "GATEWAY INSURANCE COMPANY",     
            "GA INSURANCE COMPANY",     
            "FIRST ASSURANCE COMPANY",     
            "DIRECTLINE ASSURANCE COMPANY",    
            "MONARCH INSURANCE COMPANY",   
            "KENYA ORIENT INSURANCE",
            "CANNON ASSURANCE COMPANY",        
            "CIC GENERAL INSURANCE COMPANY"      
        ];
        return view('addpolicy', [
            'insurers' => $insurers
        ]);
      
    }

    public function update() {
        //
        if (!isset($_POST['policy_no'])) {
            array_push(Request::$errors, "Nothing was posted");
            Logger::log("ERROR: The form was not filled");
            exit;
        }
        $policy_no = trim($_POST['policy_no']);
        $policy_type = trim($_POST["policy_type"]);
        $policy_price = trim($_POST["policy_price"]);
        $policy_status = trim($_POST["policy_status"]);
        $insurer = trim($_POST["insurer"]);
        $client_nat_id = trim($_POST["client_nat_id"]);
        $updated_at = date('Y-m-d H:i:s', time());
        $id = (int)trim($_POST['id']);

        Policy::update(
            "
            'policy_no' = '$policy_no',
            'policy_type' = '$policy_type',
            'policy_price' = '$policy_price',
            'policy_status' = '$policy_status',
            'insurer' = '$insurer',
            'client_nat_id' = '$client_nat_id',
            'updated_at' = '$updated_at'
            ",
            'id',
            $id
        );
        Logger::log("INFO: {$policy_no} has been Updated");
        return redirect('/policies', ["msg" => "{$policy_no} has been Updated"]);
    }
    public function delete() {
        if (!isset($_POST['id'])) {
            array_push(Request::$errors, "Nothing was posted");
            Logger::log("ERROR: The form was not filled");
            exit;
        }

        $id = (int)trim($_POST['id']);

        Policy::delete('id', $id);
        Logger::log("INFO: Policy has been Deleted");
        return redirect('/policies', ["msg" => "Policy has been Deleted"]);
    }
}
