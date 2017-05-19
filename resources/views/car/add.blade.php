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

    <h1>Add a Car </h1>
    <hr>
    <img  src ="" class=" col-md-offset-3">

        <div class="col-md-9">

            <h3>Car Details</h3>

            <form class="form-horizontal" method="post" role="form" action="{{route('add_car_submit')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label class="col-lg-4 control-label">Car Brand</label>
                    <div class="col-lg-8">
                        <select class="form-control" name="brand">
                            <option>Honda</option>
                            <option>Toyota</option>
                            <option>Nissan</option>
                            <option>Hyundai</option>
                            <option>Mitsubishi</option>
                            <option>Mazda</option>
                            <option>Suzuki</option>
                            <option>Audi</option>
                            <option>BMW</option>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 control-label">Car Type</label>
                    <div class="col-lg-8">
                        <select class="form-control" name="type">
                            <option>Budget</option>
                            <option>Standard/Compact</option>
                            <option>Luxury</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 control-label">Car Condition</label>
                    <div class="col-lg-8">
                        <select class="form-control" name="condition">
                            <option>Automatic</option>
                            <option>Manual</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 control-label">Car Image</label>
                    <div class="col-lg-8">
                        <input type="file" name="image">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-4 control-label">Number Plate</label>
                    <div class="col-lg-8">
                        <input type="file" name="no_plate">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 control-label">Insurance</label>
                    <div class="col-lg-8">
                        <input type="file" name="insurance">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 control-label">Price Per Day(Rs.)</label>
                    <div class="col-lg-8">
                        <input name="price" class="form-control" type="number" value="Rs.">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 control-label">No of passengers</label>
                    <div class="col-lg-8">
                        <input name="passengers" class="form-control" type="number">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-8">
                        <input type="submit" name="submit" class="btn btn-primary" value="Add Car">
                        <span></span>
                        <input type="reset" class="btn btn-default" value="Reset">
                    </div>
                </div>
            </form>
        </div>
    </div></div></div></div>
    @if(Session::has('message'))
        <div class="alert-box success">
            {{ Session::get('message') }}
        </div>
    @endif
@endsection
