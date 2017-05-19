<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function addCar(Request $request){
        DB::statement("INSERT INTO `car_details` (`car_id`, `brand`, `type`, `car_condition`, `no_plate`, `image`, `insurance`, `price`,`passengers`, `availableFrom`) VALUES (?, ?, ?, ?, ?, ?,?,?,?,?);",[
            Null,
            $request['brand'],
            $request['type'],
            $request['condition'],
            $request['no_plate'],
            $request['image'],
            $request['insurance'],
            $request['price'],
            $request['passengers'],
            \Carbon\Carbon::now()
        ]);

        return view('car/add') ->with('message','Successfully added!');
    }

    public function allCars(Request $request){
        $result1=DB::select("SELECT * FROM `car_details` WHERE `car_details`.`type` = 'Budget';");
        $result2=DB::select("SELECT * FROM `car_details` WHERE `car_details`.`type` = 'Standard/Compact';");
        $result3=DB::select("SELECT * FROM `car_details` WHERE `car_details`.`type` = 'Luxury';");

        return View('car/viewall') ->with('car_budget',$result1)->with('car_stand',$result2)->with('car_luxury',$result3);
    }

    public function viewCar($car_id){
        $result=DB::select("SELECT * from `car_details` WHERE `car_details`.`car_id` = ? ;",[$car_id]);
        //dd($result);
        return View('car/view') ->with('car',$result[0]);
    }

    public function updateCar(Request $request){
        DB::statement("UPDATE `car_details` SET `price` = ? WHERE `car_details`.`car_id` = ?;",[
            $request['price'],
            $request['car_id']
        ]);

        return redirect()->back()->with('message','Successfully updated!');
    }
}