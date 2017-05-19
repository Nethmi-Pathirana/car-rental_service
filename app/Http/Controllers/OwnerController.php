<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class OwnerController extends Controller
{
    //method to display owner details
    public function viewAll(Request $request){
        $result=DB::select("SELECT * FROM `car_owner`");
        return View('owner/viewall')->with('owners',$result);

    }

    public function viewOwner($owner_id){
        $result1=DB::select("SELECT * from `car_owner` WHERE `car_owner`.`owner_id` = ? ;",[$owner_id]);
        $result2=DB::select("SELECT * from `car_details` WHERE `car_details`.`owner_id` = ? ;",[$owner_id]);
        return View('owner/view') ->with('owner',$result1[0])->with('cars',$result2);
    }

    public function deleteOwner(Request $request){

        DB::beginTransaction();
        DB::statement("DELETE FROM `car_owner` WHERE `car_owner`.`owner_id` = ? ;",[$request['owner_id']]);

        DB::statement("DELETE FROM `car_details` WHERE `car_details`.`owner_id` = ? ;",[$request['owner_id']]);
        DB::commit();

        return redirect('/owner/viewall')->with('message',"Successfully deleted!");
    }
}