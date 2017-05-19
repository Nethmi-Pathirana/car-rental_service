<?php
/**
 * Created by PhpStorm.
 * User: NETHMI-PC
 * Date: 5/16/2017
 * Time: 4:34 PM
 */

namespace app\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class RenterController
{
    public function viewAll(Request $request){
        $result=DB::select("SELECT * FROM `car_renter`");
        return View('renter/viewall')->with('renters',$result);

    }

    public function viewRenter($renter_id){
        $result1=DB::select("SELECT * from `car_renter` WHERE `car_renter`.`renter_id` = ? ;",[$renter_id]);

        return View('renter/view') ->with('renter',$result1[0]);
    }

    public function deleteRenter(Request $request){

        DB::statement("DELETE FROM `car_renter` WHERE `car_renter`.`renter_id` = ? ;",[$request['renter_id']]);

        return redirect('/renter/viewall')->with('message',"Successfully deleted!");
    }
}