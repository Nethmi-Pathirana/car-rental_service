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

                    <h1>View Car</h1>
                    <hr>
                    <img  src ="{{asset('img/alto.jpg')}}" class=" col-md-offset-3">

                    <div class="col-md-9">

                <form class="form-horizontal" role="form" method="post" action="{{route('update_car_submit')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label class="col-lg-4 control-label">Car Brand</label>
                        <div class="col-lg-8">
                            <input  class="form-control" type="text" value="{{$car->brand}}" readonly="readonly" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 control-label">Car Type</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="{{$car->type}}"readonly="readonly">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 control-label">Car Condition</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="{{$car->car_condition}}" readonly="readonly" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 control-label">No of Passengers</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="{{$car->passengers}}" readonly="readonly" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 control-label">Price Per Day (Rs.)</label>
                        <div class="col-lg-8">
                            <input name="price" class="form-control" type="number" value="{{$car->price}}"  >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 control-label">Number Plate</label>
                        <div class="col-md-8">
                            <img  src ="{{asset('img/alto.jpg')}}" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 control-label">Insurance</label>
                        <div class="col-md-8">
                            <img  src ="{{asset('img/alto.jpg')}}" >
                        </div>
                    </div>
                    <input type="hidden" name="car_id" value="{{$car->car_id}}">

                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-lg-8">
                            <input class="btn btn-primary" value="UPDATE" type="submit">
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
