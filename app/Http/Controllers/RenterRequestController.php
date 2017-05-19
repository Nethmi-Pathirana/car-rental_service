<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class RenterRequestController extends Controller
{
    public function viewAllRenterReq(Request $request){
        $result=DB::select("SELECT * FROM `renter_req`;");
        return View('requests/renterreq_all')->with('renter_reqs',$result);

    }

    public function viewRenterReq($request_id){
        DB::beginTransaction();
        $result1=DB::select("SELECT * from `renter_req` WHERE `renter_req`.`request_id` = ? ;",[$request_id]);
        $result2=DB::select("SELECT * from `car_renter` WHERE `car_renter`.`renter_id` = ? ;",[$result1[0]->renter_id]);
        $result3=DB::select("SELECT * from `car_details` WHERE `car_details`.`car_id` = ? ;",[$result1[0]->car_id]);

        DB::commit();

        return View('requests/renterreq') ->with('renter',$result2[0])->with('car',$result3[0])->with('request',$result1[0]);
    }

    public function postAuth(Request $request){
        if(Input::get('accept')) {
            $this->approveRental($request); //if accept then use this method
        } elseif(Input::get('reject')) {
            $this->rejectRental($request); //if reject then use this method
        }

    }

    public function approveRental(Request $request){

        DB::beginTransaction();
        DB::statement("UPDATE `car_details` SET `availableFrom` = ? WHERE `car_id` = ?;",[
            $request['dropoff'],
            $request['car_id']]);

        DB::statement("INSERT INTO `rental` (`car_id`, `renter_id`, `pickup_date`, `dropoff_date`, `payment`) VALUES (?, ?, ?, ?, ?);",[
            $request['car_id'],
            $request['renter_id'],
            $request['pickup'],
            $request['dropoff'],
            $request['price']
        ]);
        DB::commit();
        //notify
        return redirect('/renterreq')->with('message',"Approved! Notification wll be sent to the owner ");
    }
    public function rejectRental(Request $request){
        DB::statement("DELETE FROM `renter_req` WHERE `request_id` = ?;",[$request['request_id']]);
        //notify
        return redirect('/renterreq')->with('message',"Rejected! Notification wll be sent to the owner ");
    }
}