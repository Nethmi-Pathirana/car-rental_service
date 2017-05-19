@extends('admin.layout')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <h1>View Car</h1>
                    <hr>
                    <img  src ="" class=" col-md-offset-3">

                    <div class="col-md-9">

                        <h3>Car Details</h3>

                        <form class="form-horizontal" method="post" role="form" action="{{route('update_pro_submit')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Car Brand</label>
                                <div class="col-lg-8">
                                    <input  name="customer_id" class="form-control" type="text" value="{{$car->car_brand}}" contenteditable="false" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Car Type</label>
                                <div class="col-lg-8">
                                    <input name="name" class="form-control" type="text" value="{{$car->car_type}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Car Condition</label>
                                <div class="col-lg-8">
                                    <input name="address" class="form-control" type="text" value="{{$car->car_condition}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Number Plate</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="{{$car->no_plate}}" contenteditable="false">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Insurance</label>
                                <div class="col-lg-8">
                                    <input name="phone" class="form-control" type="text" value="{{$car->insurance}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-primary" value="Save Changes">
                                    <span></span>
                                    <input type="reset" class="btn btn-default" value="Reset">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div></div></div>
@endsection
