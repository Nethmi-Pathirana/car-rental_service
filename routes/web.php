<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/login', function () {
    return view('auth/login');
});


//   ?????? Route::get('/welcome','Auth\LoginController@getLogin');
Route::post('/welcome', ['as'=>'loginauth','uses'=>'Auth\LoginController@login']);

//car routes
Route::get('/addcar', function () {return view('car/add');});
Route::post('/addcarsubmit',['as'=>'add_car_submit','uses'=>'CarController@addCar']);
Route::get('/viewcarall','CarController@allCars');
Route::get('/car/view/{car_id}',['as'=>'view_car','uses'=>'CarController@viewCar']);
Route::post('/car/updatesubmit',['as'=>'update_car_submit','uses'=>'CarController@updateCar']);

//owner routes
Route::get('/owner/view/{owner_id}',['as'=>'view_owner','uses'=>'OwnerController@viewOwner']);
Route::get('/owner/viewall','OwnerController@viewAll');
Route::post('/owner/deletesubmit',['as'=>'delete_owner_submit','uses'=>'OwnerController@deleteOwner']);

//renter routes
Route::get('/renter/view/{renter_id}',['as'=>'view_renter','uses'=>'RenterController@viewRenter']);
Route::get('/renter/viewall','RenterController@viewAll');
Route::post('/renter/deletesubmit',['as'=>'delete_renter_submit','uses'=>'RenterController@deleteRenter']);

//owner requests routes
Route::get('/ownerreq','OwnerRequestController@viewAllOwnerReq' );
Route::get('/ownerreq/{request_id}',['as'=>'view_owner_req','uses'=>'OwnerRequestController@viewOwnerReq']);
Route::post('request/result',['as'=>'owner_req_accrej','uses'=>'OwnerRequestController@postAuth']);

//rent requests routes
Route::get('/renterreq','RenterRequestController@viewAllRenterReq');
Route::get('/renterreq/{request_id}',['as'=>'view_renter_req','uses'=>'RenterRequestController@viewRenterReq']);
Route::post('renterrequest/result',['as'=>'renter_req_accrej','uses'=>'RenterRequestController@postAuth']);

//analysis routes
Route::get('/analyze', function () {return view('analysis/analyze');});
Route::post('analyze/result',['as'=>'analysis_submit','uses'=>'AnalysisController@getResults']);