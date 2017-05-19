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

                    <h1>Rent Request Details</h1>
                    <hr>
                    <div class="col-md-9">

                        <form class="form-horizontal" role="form" method="post" action="{{route('renter_req_accrej')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="request_id" value="{{ $request->request_id }}">
                            <input type="hidden" name="renter_id" value="{{ $request->renter_id }}">
                            <input type="hidden" name="car_id" value="{{ $request->car_id }}">

                            <h3>Renter Details</h3>
                            <hr>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Name</label>
                                <div class="col-lg-8">
                                    <input  class="form-control"  type="text" value="{{$renter->name}}" readonly="readonly" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Address</label>
                                <div class="col-lg-8">
                                    <input  class="form-control"  type="text" value="{{$renter->address}}" readonly="readonly" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">NIC</label>
                                <div class="col-lg-8">
                                    <input  class="form-control"  type="text" value="{{$renter->NIC}}" readonly="readonly" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Phone Number</label>
                                <div class="col-lg-8">
                                    <input  class="form-control"  type="text" value="{{$renter->phone}}" readonly="readonly" >
                                </div>
                            </div>

                            <h3>Car Details</h3>
                            <hr>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Car Image</label>
                                <div class="col-md-8">
                                    <img  src ="{{asset('img/alto.jpg')}}" name="car_image" > {{--  {{$car->image}} --}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Car Brand</label>
                                <div class="col-lg-8">
                                    <input  class="form-control" type="text" name="brand" value="{{$car->brand}}" readonly="readonly" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Car Type</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="type" type="text" value="{{$car->type}}"readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Car Condition</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="condition" type="text" value="{{$car->car_condition}}" readonly="readonly" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">No of Passengers</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="passengers" type="text" value="{{$car->passengers}}" readonly="readonly" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Price Per Day (Rs.)</label>
                                <div class="col-lg-8">
                                    <input name="price" class="form-control" type="number" value="{{$car->price}}"  >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Pick Up Date</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="pickup" type="date" value="{{$request->pickup_date}}" readonly="readonly" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Drp Off Date</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="dropoff" type="date" value="{{$request->dropoff_date}}" readonly="readonly" >
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
