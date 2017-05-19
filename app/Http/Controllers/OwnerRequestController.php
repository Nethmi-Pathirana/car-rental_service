<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class OwnerRequestController extends Controller
{

    public function viewAllOwnerReq(Request $request){
        $result=DB::select("SELECT * FROM `owner_req` WHERE `owner_req`.`isAccepted`='0';");
        return View('requests/ownerreq_all')->with('owner_reqs',$result);

    }

    public function viewOwnerReq($request_id){
        $result1=DB::select("SELECT * from `owner_req` WHERE `owner_req`.`request_id` = ? ;",[$request_id]);

        return View('requests/ownerreq') ->with('owner_req',$result1[0]);
    }

    public function postAuth(Request $request){
        if(Input::get('accept')) {
            $this->approveOwner($request); //if accept then use this method
        } elseif(Input::get('reject')) {
            $this->rejectOwner($request); //if reject then use this method
        }

    }

    public function approveOwner(Request $request){

        //dd($request['request_id']);
        DB::beginTransaction();
        DB::statement("UPDATE `owner_req` SET `isAccepted` = '1' WHERE `request_id` = ?;",[$request['request_id']]);

       /* DB::statement("INSERT INTO `car_owner` (`owner_id`, `name`, `address`, `NIC`, `phone`, `image`) VALUES (?, ?, ?, ?, ?, ?);",[
            $request['request_id'],
            $request['name'],
            $request['address'],
            $request['NIC'],
            $request['phone'],
            $request['image']
        ]);

        DB::statement("INSERT INTO `car_details` (`car_id`,`owner_id`, `brand`, `type`, `car_condition`, `no_plate`, `image`, `insurance`, `price`,`passengers`, `availableFrom`) VALUES (?, ?, ?, ?, ?, ?,?,?,?,?);",[
            Null,
            $request['request_id'],
            $request['brand'],
            $request['type'],
            $request['condition'],
            $request['no_plate'],
            $request['car_image'],
            $request['insurance'],
            $request['price'],
            $request['passengers'],
            \Carbon\Carbon::now()
        ]);
*/
        DB::commit();
        //notify
        return View('requests/ownerreq_all')->with('message',"Approved! Notification wll be sent to the owner ");
    }
    public function rejectOwner(Request $request){

        //dd($request['request_id']);
        DB::statement("UPDATE `owner_req` SET `isAccepted` = '2' WHERE `request_id` = ?;",[$request['request_id']]);
        //notify
        return View('requests/ownerreq_all')->with('message',"Rejected! Notification wll be sent to the owner ");
    }
}