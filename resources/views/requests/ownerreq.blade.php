@extends('admin.layout')

@section('content')
    @if (!empty($message))
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>{{$message}}</strong>
        </div>
    @endif
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <h1>Owner Request Details</h1>
                    <hr>
                    <img  src ="{{asset('img/avatar2.png')}}" class=" col-md-offset-3" name="image"> <!--  src="$owner->image" -->
                    <div class="col-md-9">

                        <form class="form-horizontal" role="form" method="post" action="{{route('owner_req_accrej')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="request_id" value="{{ $owner_req->request_id }}">

                            <h3>Owner Details</h3>
                            <hr>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Name</label>
                                <div class="col-lg-8">
                                    <input  class="form-control" name="name" type="text" value="{{$owner_req->name}}" readonly="readonly" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Address</label>
                                <div class="col-lg-8">
                                    <input  class="form-control" name="address" type="text" value="{{$owner_req->address}}" readonly="readonly" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">NIC</label>
                                <div class="col-lg-8">
                                    <input  class="form-control" name="NIC" type="text" value="{{$owner_req->NIC}}" readonly="readonly" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Phone Number</label>
                                <div class="col-lg-8">
                                    <input  class="form-control" name="phone" type="text" value="{{$owner_req->phone}}" readonly="readonly" >
                                </div>
                            </div>

                            <h3>Car Details</h3>
                            <hr>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Car Image</label>
                                <div class="col-md-8">
                                    <img  src ="{{asset('img/alto.jpg')}}" name="car_image" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Car Brand</label>
                                <div class="col-lg-8">
                                    <input  class="form-control" type="text" name="brand" value="{{$owner_req->car_brand}}" readonly="readonly" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Car Type</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="type" type="text" value="{{$owner_req->car_type}}"readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Car Condition</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="condition" type="text" value="{{$owner_req->car_condition}}" readonly="readonly" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">No of Passengers</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="passengers" type="text" value="{{$owner_req->passengers}}" readonly="readonly" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Price Per Day (Rs.)</label>
                                <div class="col-lg-8">
                                    <input name="price" class="form-control" type="number" value="{{$owner_req->price}}"  >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Number Plate</label>
                                <div class="col-md-8">
                                    <img  src ="{{asset('img/alto.jpg')}}" name="no_plate">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Insurance</label>
                                <div class="col-md-8">
                                    <img  src ="{{asset('img/alto.jpg')}}" name="insurance">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-lg-8">
                                    <input class="btn btn-primary" name="accept" value="Accept Request" type="submit">
                                    <input class="btn btn-primary" name="reject" value="Reject Request" type="submit">
                                    <span></span>
                                    <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div></div>
@endsection
