<?php
/**
 * Created by PhpStorm.
 * User: NETHMI-PC
 * Date: 5/19/2017
 * Time: 1:09 AM
 */

namespace App\Http\Controllers;


class AnalysisController extends Controller
{

    public function getResults(Request $request){
        //car id tika aran ekin eka blnwa rental eke then count rows

        return View('analysis/analyze_results') ->with('car_budget',$result1)->with('car_stand',$result2)->with('car_luxury',$result3);
    }
}